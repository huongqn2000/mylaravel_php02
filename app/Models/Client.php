<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'document_type',
        'document_id',
        'name',
        'email',
        'phone',
        'total_purchases',
        'total_paid',
        'balance'
    ];

    public function sale(){
        return $this->hasMany(Sale::class, 'client_id', 'id');
    }

    public function transaction(){
        return $this->hasMany(Transaction::class, 'client_id', 'id');
    }
}
