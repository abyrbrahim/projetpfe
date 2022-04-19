<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class Orders extends Component

{
    public $products = [];
    public $order;
    public $orderProducts = [];
    public $product = null;
    public $product_id=null;
    public $price;
    public function mount()
    {
        $this->product = Product::orderBy('id', 'desc')->first();
        $this->product_id=$this->product->id;

        $this->products = Product::orderBy('id', 'desc')->get();

        if (isset($this->order)) {

            $products = json_decode($this->order->orderProducts);
           foreach ($products as $product) {

              $this->orderProducts[]=[
                  'product_id' => $product->product_id,
                  'quantity' =>$product->quantity,
                  'price' => $product->price];
           }
           $this->price= $this->getTotal();
        }
        else{
            $this->price=0;
            $this->orderProducts= [];
        }


    }
    public function addProduct()
    {
        $this->orderProducts[] = ['product_id' => $this->product->id, 'quantity' => 1, 'price' => $this->product->price];
        $this->price= $this->getTotal();

    }
    public function updatingorderProducts($value, $index)
    {

        $values = explode('.', $index);
        switch ($values[1]) {
            case 'product_id':
                foreach ($this->products as $product) {
                    if ($product->id == $value) {
                        $this->product_id=$product->id;
                        $this->orderProducts[$values[0]]['price'] = $product->price;

                    }
                }
                $this->price= $this->getTotal();
                break;
            case 'quantity':

                if ($value == null) {
                    $this->orderProducts[$values[0]]['quantity'] = 0;
                    $this->orderProducts[$values[0]]['price'] = 0;
                } elseif ($value <= 0 ) {
                    $this->orderProducts[$values[0]]['quantity'] = 0;
                     $this->orderProducts[$values[0]]['price'] = 0;
                } else {

                  foreach ($this->products as $item) {
                     if($item->id == $this->product_id )
                     {
                        $this->orderProducts[$values[0]]['price'] = $item->price * $value;
                     }
                  }
                }
                $this->price= $this->getTotal();
                break;
        }
    }
    public function getTotal()
    {
        $total = 0;
        foreach ($this->orderProducts as $product ) {
            $total = $total + $product['price'];
        }
        return $total;
    }
    public function removeProduct($index)
    {

        unset($this->orderProducts[$index]);
        $this->orderProducts = array_values($this->orderProducts);
        $this->price= $this->getTotal();

    }

    public function render()
    {
        return view('livewire.orders');
    }
}
