<?php

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buyer extends User
{
    public function transactions()
    {
        return $this->hasMany(\App\Models\Transaction::class);
    }
}
