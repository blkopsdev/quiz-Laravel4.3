<?php

/**
 * Created by PhpStorm.
 * User: mitaka
 * Date: 2/2/2016
 * Time: 7:05 PM
 */
class UserTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'fname'=>'admin',
            'lname'=>'admin',
            'email'=>'admin@admin.com',
            'phone_number'=>'1111111111',
            'status'=>'3',
            'password'=>Hash::make('admin'),

        ]);
        User::create([
            'fname'=>'editor',
            'lname'=>'editor',
            'email'=>'editor@editor.com',
            'phone_number'=>'1111111112',
            'status'=>'2',
            'password'=>Hash::make('teacher')
        ]);
        User::create([
            'fname' => 'user',
            'lname' => 'user',
            'email' => 'user@user.com',
            'phone_number' => '1111111113',
            'status' => '1',
            'password' => Hash::make('student')
        ]);

    }
}
