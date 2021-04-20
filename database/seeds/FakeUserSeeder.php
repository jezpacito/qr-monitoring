<?php

use App\Guest;
use App\User;
use Illuminate\Database\Seeder;

class FakeUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user= \App\User::create([
            'gender' =>1,
            'contact_no' =>'0977452221',
            'address' =>'General Santos City',
            'lname' =>'Santos',
            'fname'=>'Juan',
            'email' => 'super_admin@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);
        $user->assignRole('super_admin');

        

        $staff= \App\User::create([
            'gender' =>1,
            'contact_no' =>'0976452121',
            'address' =>'General Santos City',
            'lname' =>'Doe',
            'fname'=>'Jane',
            'email' => 'admin@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);
        $staff->assignRole('admin');

    }
}
