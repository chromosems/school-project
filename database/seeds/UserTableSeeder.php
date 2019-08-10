<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'name'      => 'Developer',
                'email'     => 'admin@example.com',
                'password'  => bcrypt('password'),
                'role'      => 'Admin',
            ]
        );

        User::create(
            [
                'name'      => 'Technician',
                'email'     => 'technician@example.com',
                'password'  => bcrypt('password'),
                'role'      => 'Technician',
            ]
        );

        User::create(
            [
                'name'      => 'Salvado',
                'email'     => 'customer1@example.com',
                'password'  => bcrypt('password'),
                'role'      => 'Customer',
            ]
        );

        User::create(
            [
                'name'      => 'Anne Kansiime',
                'email'     => 'customer2@example.com',
                'password'  => bcrypt('password'),
                'role'      => 'Customer',
            ]
        );
    }
}
