<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Product extends Eloquent
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'color', 'size'
    ];


    /*
    * Get Todo of User
    *
    */
    public function order()
    {
        return $this->hasMany('Order');
    }
}
