<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
	protected $fillable = ['questiongroup_id','phone','answers','correct'];
    use HasFactory;
    public function student(){
    	return $this->belongsTo(Student::class,'phone','phone');
    }
    public function question(){
    	return $this->belongsTo(Question::class);
    }
}
