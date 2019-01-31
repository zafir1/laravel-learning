<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class projects extends Model
{
    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = [
    	'title','description'
    ];

    // protected $guarded = [];
}
