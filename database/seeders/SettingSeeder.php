<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Setting::create([
        'email'=>'abdo.salama400@gmail.com',
         'phone'=>'01093596195',
         'facebook'=>'https://www.facebook.com',
         'twitter'=>'https://www.twitter.com',
         'youtube'=>'https://www.youtube.com',
      ]);
    }
}
