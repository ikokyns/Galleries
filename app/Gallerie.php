<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallerie extends Model
{
	protected $fillable = [
		'name',
		'description',
		'user_id',
		'image_id'
    ];
}
