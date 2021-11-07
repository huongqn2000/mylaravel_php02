<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];

    public function transaction(){
        return $this->hasMany(Transaction::class, 'payment_method_id', 'id');
    }

    public function senderTransfer(){
        return $this->hasMany(Transfer::class, 'sender_method_id', 'id');
    }

    public function receiverTransfer(){
        return $this->hasMany(Transfer::class, 'receiver_method_id', 'id');
    }
}
