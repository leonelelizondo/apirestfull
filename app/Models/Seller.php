<?php

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends User
{
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
