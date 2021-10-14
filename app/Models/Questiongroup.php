<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questiongroup extends Model
{
    use HasFactory;
    protected $fillable = ['title','active'];
    protected $attributes = [
        'active' => false,
    ];

    public function questions(){
        return $this->hasMany(Question::class);
    }
}
