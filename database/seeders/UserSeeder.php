<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

         $user = User::create([
            'name'      => 'Root Admin',
            'username'  => 'admin',
            'email'     => 'admin@sch.id',
            'role'      => 'Admin',
            'status'    => 'Aktif',
            'password'  => bcrypt('12345678')
        ]);

        $user->assignRole('Admin');

        $this->command->info('Data User '.$user->name.' has been saved.');
       
    }
}
