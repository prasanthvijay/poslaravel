<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class showroom extends Model
{

    protected $table = 'showrooms';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sh_name', 'TIN_number', 'sh_address','sh_phone','sh_pincode','sh_city','status'
    ];
}
