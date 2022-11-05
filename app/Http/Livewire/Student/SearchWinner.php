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

        $this->students = Student::whereIn('phone',$numbers)->get();
    }

    public function render()
    {
        return view('livewire.student.search-winner');
    }
}
