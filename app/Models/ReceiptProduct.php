<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReceiptProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'receipt_id',
        'product_id',
        'stock',
        'stock_defective'
    ];

    public function receipt(){
        return $this->belongsTo(Receipt::class, 'receipt_id', 'id');
    }

    public function product(){
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
