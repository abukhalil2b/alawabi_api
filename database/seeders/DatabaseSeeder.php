<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Student;
use App\Models\State;
use App\Models\Questiongroup;
use App\Models\Question;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{


    public function run()
    {
        User::create([
			'name'=>'إبراهيم',
			'email'=>'abukhalil2b@gmail.com',
			'password'=>Hash::make('El200@200')
		]);

	}
}
