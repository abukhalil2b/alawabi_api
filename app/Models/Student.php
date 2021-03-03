<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
class Student extends Model
{
	protected $fillable = [
        'name',
        'state',
        'phone',
        'password',
    ];
    use HasApiTokens,HasFactory;
}
