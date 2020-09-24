<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category',
        'name',
        'description',
        'price',
        'image'
    ];

    /**
     * Get the restaurant that owns the menu.
     */
    public function restaurant()
    {
        return $this->belongsTo('App\Models\Restaurant');
    }

    /**
     * Get the orders for the menu.
     */
    public function orders()
    {
        return $this->hasMany('App\Models\Order');
    }
}
