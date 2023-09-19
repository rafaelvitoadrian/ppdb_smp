<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function transaksi() {
        return $this->hasMany(Transaksi::class);
    }

    public function stock() {
        return $this->hasMany(Stock::class);
    }
}
