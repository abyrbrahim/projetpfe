<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function index()
    {
            $products=Product::latest()->get();

            return view('products.index')->with('products', $products);

    }
    public function create()
    {
        return view('products.create');
    }
    public function store(ProductRequest $request) {

        Product::create([
             'sku' => $request->sku,
             'qte' => $request->qte,
         ]);
         Session::flash('success_message', 'Operation effectuer avec success');
         return redirect()->route('products');
     }
     public function edit(product $product)
     {

     return view('products.edit')->with('product', $product);
     }
     public function update(ProductUpdateRequest $request)
     {
            Product::findorfail($request->id)->update([
                'sku' => $request->sku,
                'qte' => $request->qte,]);
                Session::flash('success_message', 'Operation effectuer avec success');
         return redirect()->route('products');

    }
    public function delete($id)
    {
        $product =Product::findorfail($id);
        $product->delete();
        Session::flash('success_message', 'Operation effectuer avec success');
        return redirect()->route('products');
    }

}
