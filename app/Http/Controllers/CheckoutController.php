<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Shipping;
use Cart;
use Zarinpal\Zarinpal;
use App\Payment;
use App\Order;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // send categories to this page
        $categories = Category::all();

        return view('checkout')->with([
          'categories'=>$categories,
          'discount' => $this->getNumbers()->get('discount'),
          'newTotal'=>$this->getNumbers()->get('newTotal'),
          'newTax'=>$this->getNumbers()->get('newTax'),
          'newSubTotal'=>$this->getNumbers()->get('newSubTotal'),
        ]);
    }

    public function store(Request $request)
    {
      //save shipping
      $insertedShipping = Shipping::create($request->all());

      // generate product ids for order table
      $product_ids= array();
      foreach (Cart::instance('default')->content() as $product) {
        array_push($product_ids,$product->id);
      }

      // save order
      $ifExistOrder = Order::where([
        'user_id'=>auth()->user()->id,
        'status'=>'pending'
      ])->first();
      if ($ifExistOrder) {
        // update existance order
        $ifExistOrder->shipping_id=$insertedShipping->id;
        $ifExistOrder->product_ids=json_encode($product_ids);
        $ifExistOrder->save();

      }else {
        Order::create([
          'user_id'=>auth()->user()->id,
          'shipping_id'=>$insertedShipping->id,
          'payment_id'=>0,
          'status'=>'pending',
          'product_ids'=>json_encode($product_ids),
        ]);
      }

      $this->zarinPalDoPay();

      // payment

      //order information
    }
    public function zarinPalDoPay()
    {
      // zarinpal merchen code
      $zarinpal = new Zarinpal('aae0a368-021a-11e6-a1db-005056a205be');

      //$zarinpal->enableSandbox();

      $results = $zarinpal->request(
            route('checkout.callback'),    //url callback
            //$this->getNumbers()->get('newTotal'), // total amounth
            1000,
            auth()->user()->name,                             //name
            auth()->user()->email,                      //email
            auth()->user()->phone                         //phone
        );

        if (isset($results['Authority'])) {

            $ifExist = Payment::where([
              'session_id'=>session()->getId(),
              'status'=>'pending'
              ])->first();

            if ($ifExist) {
                $ifExist->price = $this->getNumbers()->get('newTotal');
                $ifExist->authority = $results['Authority'];
                $ifExist->status = 'pending';
                $ifExist->refid=0;
                $ifExist->save();
            }else {
              $payment = Payment::create([
                'authority'=>$results['Authority'],
                'price'=>$this->getNumbers()->get('newTotal'),
                'status'=>'pending',
                'refid'=>0,
                'session_id'=>session()->getId(),
              ]);
            }

            $zarinpal->redirect();
        }

    }

    // zarinpal callback method
    public function zarinpalCallBack()
    {
      //verify

      $zarinpal = new Zarinpal('aae0a368-021a-11e6-a1db-005056a205be');
      $authority = Payment::where('session_id',session()->getId())->first()->authority;
      $status = json_encode($zarinpal->verify('OK', 1000, $authority)['Status']);

      if ($status == '"verified_before"' || $status == '"success"') {
        // success payment
        $refid = json_encode($zarinpal->verify('OK', 1000, $authority)['RefID']);
        $successPay = Payment::where('session_id',session()->getId())->first();
        $payment_id = $successPay->id;
        $successPay->status = 'complete';
        $successPay->refid =$refid;
        $successPay->save();

        //update order table to complete
        $ifExistOrder = Order::where([
          'user_id'=>auth()->user()->id,
          'status'=>'pending'
        ])->first();
        if ($ifExistOrder) {
          $ifExistOrder->status='complete';
          $ifExistOrder->payment_id = $payment_id;
          $ifExistOrder->save();
        }

        // empty cart
        Cart::instance('default')->destroy();
        return redirect()->route('checkout.successfull',$refid);
      }else {

        echo 'Not Success payment';
      }
      //'Status'(index) going to be 'success', 'error' or 'canceled'
    }

    private function getNumbers()
    {
      $tax = config('cart.tax')/100 ;
      $discount = session()->get('coupon')['discount'] ??0;
      $newSubTotal = number_format((float)Cart::subtotal(),2)*1000 - $discount;
      $newTax = $newSubTotal * $tax;
      $newTotal = $newSubTotal * (1+$tax);

      return collect([
        'tax'=>$tax,
        'discount'=>$discount,
        'newSubTotal' => $newSubTotal,
        'newTax' => $newTax,
        'newTotal'=>$newTotal
      ]);
    }

    public function successfull($refid=0)
    {
      //
      $categories = Category::all();
      //

      return view('checkout_success')->with([
          'categories'=>$categories,
          'refid'=>$refid,
      ]);
    }

}
