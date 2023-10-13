<?php

namespace Database\Seeders;

use App\Models\User;
use Bouncer;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::factory(1)->create(
            [
                'first_name' => 'Admin',
                'last_name' => 'Test',
                'email' => 'admin@demo.com',
                'email_verified_at' => null,
                'password' => bcrypt('1234'),
                'email_verified_at' => now()
            ]
        );

        Bouncer::assign('admin')->to($users->first());

        $users = User::factory(1)->create(
            [
                'first_name' => 'User',
                'last_name' => 'Test',
                'email' => 'user@demo.com',
                'email_verified_at' => null,
                'password' => bcrypt('1234'),
                'email_verified_at' => now()
            ]
        );

        Bouncer::assign('regular')->to($users->first());
    }
}
