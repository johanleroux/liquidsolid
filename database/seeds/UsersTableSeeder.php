<?php

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
        $user = new App\User();
        $user->name = 'John Doe';
        $user->email = 'john@example';
        $user->password = bcrypt('secret');
        $user->save();

        $user = new App\User();
        $user->name = 'Jane Doe';
        $user->email = 'jane@example';
        $user->password = bcrypt('secret');
        $user->save();
    }
}
