<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     Role::create(['name' =>'admin']);

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
    }
}
