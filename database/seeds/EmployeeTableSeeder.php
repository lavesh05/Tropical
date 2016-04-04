<?php

use Illuminate\Database\Seeder;
use App\Models\Employee\Employee;
use App\Models\Users\User;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employees = [
            [
                'title'             => 'Mr',
                'lastname'          => 'John',
                'firstname'         => 'Connor',
                'landline_phone'    => '',
                'mobile_phone'      => '',
                'email'             => 'admin@example.com',
                'is_admin'   => true
            ],
            [
                'title'             => 'Mr',
                'lastname'          => 'Lex',
                'firstname'         => 'Luthor',
                'landline_phone'    => '',
                'mobile_phone'      => '',
                'email'             => 'expert@example.com',
                'is_admin'   => false
            ],
            [
                'title'             => 'Mrs',
                'lastname'          => 'Sarah',
                'firstname'         => 'Connor',
                'landline_phone'    => '',
                'mobile_phone'      => '',
                'email'             => 'employee@example.com',
                'is_admin'   => false
            ],
        ];

        for ($i = 0; $i < count($employees); $i++) {

            $employee = $employees[$i];

            $user =  User::where('email', $employee['email'])->first();

            if (null != $user) {

                $employee = Employee::create([
                    'title'  => $employee['title'],
                    'lastname' => $employee['lastname'],
                    'firstname' => $employee['firstname'],
                    'landline_phone' => $employee['landline_phone'],
                    'mobile_phone' => $employee['mobile_phone'],
                    'email' => $employee['email'],
                    'is_admin' => $employee['is_admin'],
                ]);

                $employee->touch();

                $employee->user()->save($user);
            }
        }
    }
}
