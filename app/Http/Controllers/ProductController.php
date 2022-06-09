<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductQuantityRequest;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();
        Session::put('page', 'products');
        return view('products.index')->with('products', $products);
    }
    public function create()
    {
        return view('products.create');
    }
    public function store(ProductRequest $request)
    {

        Product::create($request->all());
        Session::flash('success_message', 'Operation effectuer avec success');
        return redirect()->route('products');
    }
    public function edit(product $product)
    {

        return view('products.edit')->with('product', $product);
    }
    public function update(ProductRequest $request)
    {

        Product::findorfail($request->id)->update($request->all());
        Session::flash('success_message', 'Operation effectuer avec success');
        return redirect()->route('products');
    }

    public function quantity(ProductQuantityRequest $request)
    {


        $product = Product::findorfail($request->id);
        $quantity = $product->qte + $request->quantity;
        $product->update([
            'qte' => $quantity
        ]);

        Session::flash('success_message', 'Operation effectuer avec success');
        return back();
    }

    public function delete($id)
    {
        Product::findorfail($id)->delete();
        Session::flash('success_message', 'Operation effectuer avec success');
        return redirect()->route('products');
    }
}
