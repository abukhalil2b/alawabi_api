<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
	protected $fillable = [
        'name',
    ];
    public $timestamps=false;
    use HasFactory;

    public function students(){
        return $this->hasMany(Student::class);
    }
}
