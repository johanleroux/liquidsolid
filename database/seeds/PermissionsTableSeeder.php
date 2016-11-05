<?php

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    $permission = new Permission();
    $permission->name  = 'ad.create';
    $permission->label = 'Post Ad';
    $permission->save();

    $permission = new Permission();
    $permission->name  = 'ad.edit';
    $permission->label = 'Edit Ad';
    $permission->save();

    $permission = new Permission();
    $permission->name  = 'ad.delete';
    $permission->label = 'Delete Ad';
    $permission->save();
  }
}
