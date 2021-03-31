<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Winner extends Model
{
	protected $fillable = [
        'name',
        'phone',
    ];
    use HasFactory;
}