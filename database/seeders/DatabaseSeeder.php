<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Theme;
use App\Models\SiteSetting;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Admin::insert([
            'name' => 'Kabita Bhatta',
            'email' => 'kabitabbhatta@gmail.com',
            'password' => bcrypt('password'),
        ]);

        

          SiteSetting::insert([
            'email'=>"info@project.com",
            
          ]);
    }
}
