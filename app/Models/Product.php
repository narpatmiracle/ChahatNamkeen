<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable =
    [
           'Categoris_id',
           'Name',
           'Code',
           'Description',
           'Stock',
           'Price',
           'DiscontPrice',
           'TaxRate',
           'Tags',
           'Brand',
           'Vendor',
           'image',
        
    ];

    
    public function category() 
    {
        return $this->belongsTo(Categories::class, 'Categoris_id', 'id');
    }
}
