<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class adminseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'elavarasan',
            'email' => 'elamaniam@gmail.com',
            'password' => bcrypt('admin123'),
        ]);
    }
}
