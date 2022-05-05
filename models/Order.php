<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Order extends Eloquent
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_id', 'address', 'quantity'
    ];


    /*
    * Get Todo of User
    *
    */
    public function product()
    {
        return $this->belongsTo('Product');
    }
}
