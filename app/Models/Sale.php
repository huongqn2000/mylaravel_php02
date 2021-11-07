<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'client_id',
        'total_amount'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function client(){
        return $this->belongsTo(Client::class, 'client_id', 'id');
    }

    public function sold(){
        return $this->hasMany(SoldProduct::class, 'sale_id', 'id');
    }

    public function transaction(){
        return $this->hasMany(Transaction::class, 'sale_id', 'id');
    }
}
