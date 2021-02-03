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
        $users =factory(User::class, 5)->create();

        $admin =factory(User::class)->create([
            'email' => 'admin@gmail.com'
        ]);
        $admin->assignRole('admin');

        foreach ($users as $user){
            $user->assignRole('admin');
        }

    }
}
