<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'user_id',
        'address',
        'state',
        'city',
        'image',
        'open_time',
        'close_time'
    ];

    /**
     * Get the user that owns the restaurant.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * Get the menus for the restaurant.
     */
    public function menus()
    {
        return $this->hasMany('App\Models\Menu');
    }
}
