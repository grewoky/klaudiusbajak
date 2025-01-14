<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Define the table name (optional if the table follows Laravel's naming convention)
    protected $table = 'products';

    // Define the fillable fields (these are the fields that can be mass assigned)
    protected $fillable = [
        'Nama_Produk', // Name of the product
        'category',    // Category of the product
        'Harga',       // Price of the product
        'Image_Path',  // Path to the product image
    ];

    // Optionally, you can define the data types for each field here if needed
    protected $casts = [
        'Harga' => 'decimal:2', // Ensure price is treated as a decimal with 2 places
    ];

    // Define relationships if your model has any, for example:
    // public function category()
    // {
    //     return $this->belongsTo(Category::class);
    // }
}
