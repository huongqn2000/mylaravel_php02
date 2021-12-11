<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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

    protected $casts = [
        'created_at' => 'datetime:Y-m-d',
        'updated_at' => 'datetime:y-m-d'
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

    public function images():BelongsToMany
    {
        return $this->belongsToMany(Images::class, 'product_images', 'product_id', 'image_id');
    }
    public function getImages():\IteratorAggregate
    {
        return $this->images();
    }
}
