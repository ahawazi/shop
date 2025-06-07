<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;

class SaveForLaterController extends Controller
{
    public function destroy($id)
    {
      Cart::instance('saveForLater')->remove($id);
      return redirect(route('cart.index'))->with('success_message','محصول از لیست ذخیره ها پاک شد');
    }

    public function saveForLater($id)
    {
      // delete from default cart
      // insert to saveForLater instance cart
      $isExist = Cart::search(function($cartItem,$rowId) use($id){
          return $rowId === $id;
      });
      if ($isExist->isNotEmpty()) {

        $item = Cart::get($id);

        Cart::instance('saveForLater')->add($item->id, $item->name, 1, $item->price)
        ->associate('App\Product');

        // remove from default cart
        Cart::instance('default')->remove($id);
        return redirect(route('cart.index'))->with('success_message','محصول به لیست ذخیره ها اضافه شد');
      }
    }

    public function switchFromSavedToCart($id)
    {
      $item = Cart::instance('saveForLater')->get($id);
      Cart::instance('saveForLater')->remove($id);

      $duplicated = Cart::instance('default')->search(function($cartItem,$rowId) use($id){
          return $rowId === $id;
      });
      if ($duplicated->isNotEmpty()) {
          return redirect(route('cart.index'))->with('success_message','محصول از قبل در سبد وجود دارد');
      }else {
        Cart::instance('default')->add($item->id, $item->name, 1, $item->price)
        ->associate('App\Product');
        return redirect(route('cart.index'))->with('success_message','محصول با موفقیت از لیست ذخیره به سبد اضافه شد');
      }
    }
}
