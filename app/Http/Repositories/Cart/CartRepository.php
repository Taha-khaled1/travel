<?php

namespace App\Repositories\Cart;

use App\Models\Product;
use App\Models\Trip;
use Illuminate\Support\Collection;

interface CartRepository
{
    public function get() : Collection;
    
    public function add(Trip $product, $quantity = 1, $size ,$color  );

    public function update($id, $quantity );

    public function delete($id);

    public function empty();

    public function total() : float;
}