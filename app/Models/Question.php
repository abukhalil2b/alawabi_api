<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
	protected $fillable = ['url','content','op1','op2','op3','answer','active','questiongroup_id'];
	
    use HasFactory;
}
