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
            'email' => 'admin@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'rfid_uuid' => '123456789'
        ]);
        $user->assignRole('admin');

        $guest = Guest::create([
            'fname' =>'marie',
            'lname' =>'Cruz',
            'address' => 'gensan',
            'city' =>'gensanssss' ,
            'prk_brgy' =>'san isidro',
            'contact_no' =>'12121212',
            'gender' =>true,
            'postal_code' =>1234,
            'email' =>'marie@gmail.com',
            'qr_code' =>'12345678',
            'qr_number' =>'12345678',
            'qr_uri' =>'12345678-uri',
        ]);

        $staff= \App\User::create([
            'gender' =>1,
            'contact_no' =>'0976452121',
            'address' =>'General Santos City',
            'lname' =>'Doe',
            'fname'=>'Jane',
            'email' => 'employee@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'rfid_uuid' => \Illuminate\Support\Str::uuid()
        ]);
        $staff->assignRole('staff');

    }
}
