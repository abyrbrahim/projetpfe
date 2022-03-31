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
             'prix'=>$request->prix,

         ]);
             $order->products()->attach($request->products_id, ['qte' => 2]);

             //$order->products()->attach(1,);

             Session::flash('success_message', 'Operation effectuer avec success');
         return redirect()->route('orders');
     }

     public function update(OrderRequest $request)
     {
        Order::findorfail($request->id)->update([
            'description' => $request->description,
            'client_id' => $request->client_id,
            'prix'=>$request->prix,
        ]);
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
