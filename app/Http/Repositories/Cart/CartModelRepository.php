<?php

namespace App\Repositories\Cart;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Trip;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;

class CartModelRepository implements CartRepository
{
    protected $items;

    public function __construct()
    {
        $this->items = collect([]);
    }

    public function get() : Collection
    {
        if (!$this->items->count()) {
            $this->items = Cart::with('product')->get();
        }

        return $this->items;
    }

    public function add(Trip $product, $quantity = 1 , $size ,$color )
    {
        $item =  Cart::where('product_id', '=', $product->id)
            ->first();
        
        if (!$item) {
            $cart = Cart::create([
                'user_id' => Auth::id(),
                'product_id' => $product->id,
                'quantity' => $quantity,
                'options' =>  $size  ,
                'color' =>  $color  ,
            ]);
            $this->get()->push($cart);
            return $cart;
        }

        $item->quantity = $quantity;
        $item->options = $size;
        $item->color = $color;
        $item->save();
        return $item;
    }

    public function update($id, $quantity)
    {
        Cart::where('id', '=', $id)
            ->update([
                'quantity' => $quantity, 
            ]);
    }

    public function delete($id)
    {
        Cart::where('id', '=', $id)
            ->delete();
    }

    public function empty()
    {
        Cart::query()->delete();
    }

    public function total() : float
    {
        /*return (float) Cart::join('products', 'products.id', '=', 'carts.product_id')
            ->selectRaw('SUM(products.price * carts.quantity) as total')
            ->value('total');*/

        return $this->get()->sum(function($item) {
            if($item->product->price_alternative ) {
                return $item->quantity * $item->product->price_alternative;
            }else{
                return $item->quantity * $item->product->price;
            }
            
        });
    }
}