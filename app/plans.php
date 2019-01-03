<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class plans extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'plans';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['subjects','descriptions','category_id'];
}
