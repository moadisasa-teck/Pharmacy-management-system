<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'product',
        'category_id',
        'supplier_id',
        'cost_price',
        'quantity',
        'expiry_date',
        'image'
    ];

    public function product()
    {
        return $this->hasOne(Product::class, 'purchase_id');
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function purchaseProduct()
    {
        return $this->hasOne(Product::class);
    }
}
