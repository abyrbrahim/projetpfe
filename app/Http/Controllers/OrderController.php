<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Client;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    public function index()
    {

            $orders=Order::latest()->get();
            return view('orders.index')->with('orders', $orders);

    }

    public function show(Order $order)
    {
       return view('orders.show',compact('order'));
    }
    public function edit(Order $order)
    {
        $clients = Client::latest()->get();
        return view('orders.edit',compact('clients','order'));
    }
    public function create()
    {
        $clients = Client::latest()->get();
        $products = Product::latest()->get();
        return view('orders.create',compact('clients','products'));
    }
    public function store(OrderRequest $request) {

        $order=Order::create([
             'description' => $request->description,
             'client_id' => $request->client_id,
             'user_id'=>Auth::user()->id,
             'price'=>$request->price,
             'orderProducts' =>json_encode($request->orderProducts)

         ]);
        foreach ($request->orderProducts as  $item) {
            $order->products()->attach($item['product_id'], ['qte' => $item['quantity'],'price'=>$item['price']]);
        }
        Session::flash('success_message', 'Operation effectuer avec success');
        return redirect()->route('orders');
     }

     public function update(OrderRequest $request)
     {
         $order = Order::findorfail($request->id);
        $order->update([
            'description' => $request->description,
            'client_id' => $request->client_id,
            'price'=>$request->price,
            'orderProducts' =>json_encode($request->orderProducts)
        ]);
        $order->products()->detach();
        foreach ($request->orderProducts as  $item) {
            $order->products()->attach($item['product_id'], ['qte' => $item['quantity'],'price'=>$item['price']]);
        }
        Session::flash('success_message', 'Operation effectuer avec success');
        return redirect()->route('orders');
     }
     public function delete($id)
     {
        Order::findorfail($id)->delete();
        Session::flash('success_message', 'Operation effectuer avec success');
        return back();
     }

}
