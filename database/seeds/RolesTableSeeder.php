<?php

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    $ad_create = Permission::where('name', 'ad.create')->first();
    $ad_edit   = Permission::where('name', 'ad.edit')->first();
    $ad_delete = Permission::where('name', 'ad.delete')->first();

    $role = new Role();
    $role->name  = 'breeder';
    $role->label = 'Breeder';
    $role->save();

    $role->givePermissionTo($ad_create);
    $role->givePermissionTo($ad_edit);
    $role->givePermissionTo($ad_delete);

    $role = new Role();
    $role->name  = 'moderator';
    $role->label = 'Moderator';
    $role->save();

    $role->givePermissionTo($ad_create);
    $role->givePermissionTo($ad_edit);
    $role->givePermissionTo($ad_delete);

    $role = new Role();
    $role->name  = 'admin';
    $role->label = 'Admin';
    $role->save();

    $role->givePermissionTo($ad_create);
    $role->givePermissionTo($ad_edit);
    $role->givePermissionTo($ad_delete);
  }
}
