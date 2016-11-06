<?php

use App\Models\User;
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
    $user = new User();
    $user->name           = 'John Doe';
    $user->email          = 'john@example.com';
    $user->password       = bcrypt('secret');
    $user->remember_token = str_random(10);
    $user->save();
    $user->assignRole('admin');

    $user = new User();
    $user->name           = 'Jane Doe';
    $user->email          = 'jane@example.com';
    $user->password       = bcrypt('secret');
    $user->remember_token = str_random(10);
    $user->save();
    $user->assignRole('breeder');

    factory(User::class, 8)->create();
  }
}
