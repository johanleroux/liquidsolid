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
    $user->email          = 'admin@example.com';
    $user->password       = bcrypt('secret');
    $user->remember_token = str_random(10);
    $user->save();
    $user->assignRole('admin');
    $user->assignRole('moderator');
    $user->assignRole('breeder');

    $user = new User();
    $user->name           = 'Jane Doe';
    $user->email          = 'mod@example.com';
    $user->password       = bcrypt('secret');
    $user->remember_token = str_random(10);
    $user->save();
    $user->assignRole('moderator');
    $user->assignRole('breeder');

    $user = new User();
    $user->name           = 'Bob Doe';
    $user->email          = 'breeder@example.com';
    $user->password       = bcrypt('secret');
    $user->remember_token = str_random(10);
    $user->save();
    $user->assignRole('breeder');

    $user = new User();
    $user->name           = 'Just Doe';
    $user->email          = 'user@example.com';
    $user->password       = bcrypt('secret');
    $user->remember_token = str_random(10);
    $user->save();

    factory(User::class, 21)->create();
  }
}
