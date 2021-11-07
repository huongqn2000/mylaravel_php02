<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'provider_id',
        'user_id'
    ];

    public function provider(){
        return $this->belongsTo(Provider::class, 'provider_id', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function receiptProduct(){
        return $this->hasMany(ReceiptProduct::class, 'receipt_id', 'id');
    }
}
