<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookModel extends Model
{
    use HasFactory;

    public function orderModel(){
        return $this->hasOne(OrderModel::class, 'id');
    }
}
