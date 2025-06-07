<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coupon;
use Cart;

class CouponController extends Controller
{

    public function store(Request $request)
    {

      $coupon = Coupon::where('code',$request->coupon_code)->first();
      if (! $coupon) {
        return redirect()->route('cart.index')->with('error_message','Invalid Coupon Code !');
      }
      
      session()->put('coupon',[
        'code'=>$coupon->code,
        'discount'=>$coupon->discount(Cart::subtotal()),
      ]);
      return redirect()->route('cart.index')->with('success_message','Coupon is True !');

    }

    public function destroy()
    {
        session()->forget('coupon');
        return redirect()->route('cart.index')->with('success_message','coupon removed ');
    }
}
