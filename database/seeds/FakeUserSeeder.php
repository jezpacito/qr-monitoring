<?php

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
        ]);
        $user->assignRole('admin');

//        $users =factory(User::class, 5)->create();
//        $admin =factory(User::class)->create([
//            'email' => 'admin@gmail.com',
//            'password' => \Illuminate\Support\Facades\Hash::make('12345678')
//        ]);
//        $admin->assignRole('admin');

//        foreach ($users as $user){
//            $user->assignRole('admin');
//        }

    }
}
