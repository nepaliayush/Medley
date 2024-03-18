<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Session;
use App\Models\Product;
use App\Models\User;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
           
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
    public function slider(){
    //return Product::all();
    //return view('home');
    $data=Product::
    orderBy('name','desc')
    ->take(8)
    ->get();
    return view('home',['products'=>$data]);
    }

    public function shirts(){
        $data=Product::where('category','shirt')->get();
    return view('shirts',['products'=>$data]);
    }
    public function shoes(){
        $data=Product::where('category','shoes')->get();
    return view('shoes',['products'=>$data]);
    }
    public function tshirts(){
        $data=Product::where('category','tshirt')->get();
    return view('tshirts',['products'=>$data]);
    }
    public function pants(){
        $data=Product::where('category','pants')->get();
    return view('pants',['products'=>$data]);
    }
    // public function shirts(){
    //     $shirt=Product::where('category','shirts')->get();
    //      //return Product::all();
    //     return view('shirts',['products'=>$shirt]);
    // }   
    
    public function details($id){
        $data=Product::find($id);
        return view('details',['products'=>$data]);

    }
    
   
    
    
        public function addOrder(Request $request,$id){
            if(Auth::id()){
                    $user=auth()->user();
                    $products=Product::find($id);
                    $order=new Order;
                    $order->product_id=$products->id;
                    $order->user_id=$user->id;
                    $order->name=$user->name;
                    $order->email=$user->email;
                    $order->products_image=$products->gallery;
                    $order->products_name=$products->name;
                    $order->quantity= $request->quantity;
                    $order->price=$products->price;
                    $order->save();
                   
                return  redirect()->back()->with('message', 'Item Ordered.');
     
            }
            else{
                return redirect('/login');
            }
        }

  
}