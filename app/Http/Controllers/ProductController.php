<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('user.menu', compact('products'));
    }
    public function cart()
    {
        return view('user.cart');
    }
    public function addToCart($id)
    {
        $product = Product::findOrFail($id);

        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        }  else {
            $cart[$id] = [
                "name" => $product->name,
                "image" => $product->image,
                "price" => $product->price,
                "quantity" => 1
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product add to cart successfully!');
    }

    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart successfully updated!');
        }
    }

    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product successfully removed!');
        }
    }

    public function checkout (Request $request){

        $id_product = $request->id_product;
        $total_pesanan = $request->total_pesanan;
        $totalPrice = $request->totalPrice;
 
            for($i=0;$i<count((array)$id_product);$i++){
                Order::create([
                    'id_product' => $id_product[$i],
                    'total_pesanan' => $total_pesanan[$i],
                    'totalPrice' => $totalPrice[$i]
                ]);

                // $products = Product::where('id_product','=',$id_product)->first();
                // $total = $products->array['stock']-$total_pesanan[$i];
                // $products->update([
                //     'stock' => $total[$i],
                // ]);
            }
        
            $request->session()->forget('cart');
        
            return redirect('/menu')->with('success', 'Product orders successfully!');

    }
}
