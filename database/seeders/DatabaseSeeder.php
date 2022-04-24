<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Student;
use App\Models\State;
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


    foreach($students as $student){
        Student::create($student);
    }

        $states = [
            'مسقط',
            'مطرح',
            'بوشر',
            'السيب',
            'العامرات',
            'قريات',
            'الخابورة',
            'صحم',
            'صحار',
            'لوى',
            'شناص',
            'السويق',
            'بركاء',
            'المصنعة',
            'الرستاق',
            'العوابي',
            'وادي المعاول',
            'نخل',
            'سمائل',
            'بدبد',
            'نزوى',
            'الحمراء',
            'بهلاء',
            'منح',
            'إزكي',
            'أدم',
            'عبري',
            'ضنك',
            'ينقل',
            'البريمي',
            'محضة',
            'لسنينة',
            'مدحاء',
            'دبا',
            'خصب',
            'بخا',
            'صور',
            'جعلان بني بوحسن',
            'جعلان بني بوعلي',
            'الكامل والوافي',
            'مصيرة',
            'وادي بني خالد',
            'دماء والطائيين',
            'القابل',
            'إبرا',
            'المضيبي',
            'بدية',
            'هيما',
            'محوت',
            'الدقم',
            'الجازر',
            'شليم وجزر الحلانيات',
            'سدح',
            'مرباط',
            'طاقة',
            'صلالة',
            'رخيوت',
            'ضلكوت',
            'ثمريت',
            'المزيونة',
            'مقشن'
        ];

            foreach($states as $state){
                State::create(['name'=>$state]);
            }

    }


}
