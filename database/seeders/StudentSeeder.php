<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'fname' => Str::random(10),
            'lname' => Str::random(10),
            'reg_no' => Str::random(10),
            'gender' => 'male',
            'amount' => 45000,
            'age' => 12,

        ]);
    }
}

