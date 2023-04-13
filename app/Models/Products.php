<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Products as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Products extends Model
{
    use HasFactory;
    protected $table="products"; 
    public $timestamps= false;
    protected $primaryKey = 'product_id';
    /**
     * The attributes that are mass assignable.
     * *
    * @var array
    */
    protected $fillable = [
        'product_code',
        'product_name',
        'product_category',
        'price',
        'quantity',
    ];
}
