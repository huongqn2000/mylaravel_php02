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
        'last_purchases',
        'total_purchases',
        'total_paid',
        'balance'
    ];
}
