<?php

namespace App\Http\Livewire\Student;

use App\Models\Student;
use Livewire\Component;

class SearchWinner extends Component
{
    public $students = [];

    public $searchKey;

    public function search(){

        $numbers = explode("\n", $this->searchKey);
        $placeholders = implode(', ', array_fill(0, count($numbers), '?'));
        $this->students = Student::whereIn('phone',$numbers)
        ->orderByRaw("FIELD(phone, {$placeholders})", $numbers)
        ->get();
    }

    public function render()
    {
        return view('livewire.student.search-winner');
    }
}
