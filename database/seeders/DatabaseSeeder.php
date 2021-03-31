<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
			'name'=>'إبراهيم',
			'email'=>'abukhalil2b@gmail.com',
			'password'=>Hash::make('El200@200')
		]);
    }
}
