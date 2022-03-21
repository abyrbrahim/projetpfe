<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Client;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return view('orders.create',compact('clients'));
    }
    public function store(OrderRequest $request) {

        Order::create([
             'description' => $request->description,
             'client_id' => $request->client_id,
             'user_id'=>Auth::user()->id,
             'prix'=>$request->prix,

         ]);

         return redirect()->route('orders');
     }

     public function update(OrderRequest $request)
     {
        Order::findorfail($request->id)->update([
            'description' => $request->description,
            'client_id' => $request->client_id,
            'prix'=>$request->prix,
        ]);
        return redirect()->route('orders');
     }
     public function delete($id)
     {
         $order =Order::findorfail($id);

     }

}
