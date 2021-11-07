<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'product_category_id',
        'price',
        'stock',
        'stock_defective'
    ];

    public function category(){
        return $this->belongsTo(ProductCategory::class, 'product_category_id', 'id');
    }

    public function receiptProduct(){
        return $this->hasMany(ReceiptProduct::class, 'product_id', 'id');
    }

    public function sold(){
        return $this->hasMany(SoldProduct::class, 'product_id', 'id');
    }
}
