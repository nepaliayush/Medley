<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function addtoCart(Request $request,$id){
        if(Auth::id()){
                $user=auth()->user();
                
                $cart=new Cart;
                $cart->product_id=$products->id;
                $cart->user_id=$user->id;
                $cart->name=$user->name;
                $cart->email=$user->email;
                $cart->products_image=$products->gallery;
                $cart->products_name=$products->name;
                $cart->quantity= $request->quantity;
                $cart->price=$products->price;
                $cart->save();
               
            return  redirect()->back()->with('message', 'Item added to cart successfully.');
 
        }
        else{
            return redirect('/login');
        }

    }

   public function cartItem(){
    if(Auth::id()){
        $user=auth()->user();
        return Cart::where('email',[$user->email])->count(); 
    }
    else{
        return redirect('/login');
    }
  }

  public function cartDisplay(){
    if(Auth::id()){
        $user=auth()->user();
        //$data=Cart::where('email',[$user->email])->get(); 
       // $cartitems=Cart:: where('email',[$user->email])->get();
        $cartitems= Cart:: where('email',[$user->email])->get();
        return view('cart',['cartitems'=>$cartitems]);
    }
    else{
        return redirect('/login');
    }
    }      

public function cartRemove($id){
    $data=Cart::find($id);
    $data->delete();
    return redirect()->back();
}
}
