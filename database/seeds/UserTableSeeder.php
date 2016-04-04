<?php

use Illuminate\Database\Seeder;
use App\Models\Users\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'      => 'Admin',
                'email'     => 'admin@example.com',
                'password'  => 'superadmin',
                'is_admin'  => true,
            ],
            [
                'name'      => 'anexpert',
                'email'     => 'expert@example.com',
                'password'  => 'expert',
                'is_admin'  => false,
            ],
            [
                'name'      => 'anemployee',
                'email'     => 'employee@example.com',
                'password'  => 'employee',
                'is_admin'  => false,
            ],
        ];

        for ($i = 0; $i < count($users); $i++) {

            $user = $users[$i];
            if (0 === User::where('email', $user['email'])->count()) {
                $user = User::create([
                    'name'  => $user['name'],
                    'email' => $user['email'],
                    'is_admin' => $user['is_admin'],
                    'password'  => \Hash::make($user['password']),
                ]);

                $user->touch();
            }
        }
    }
}
