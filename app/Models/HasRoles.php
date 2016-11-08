<?php

namespace App\Models;

trait HasRoles
{
  public function roles()
  {
    return $this->belongsToMany(Role::class);
  }

  public function assignRole($role)
  {
    return $this->roles()->save(Role::whereName($role)->firstOrFail());
  }

  public function removeRole($role)
  {
    $role = Role::where('name', $role)->firstOrFail();
    $this->roles()->detach($role->id);
  }

  /**
  * Determine if the user has the given role.
  *
  * @param  mixed $role
  * @return boolean
  */
  public function hasRole($role)
  {
    if (is_string($role)) {
      return $this->roles->contains('name', $role);
    }
    return !! $role->intersect($this->roles)->count();
  }

  /**
  * Determine if the user may perform the given permission.
  *
  * @param  Permission $permission
  * @return boolean
  */
  public function hasPermission(Permission $permission)
  {
    return $this->hasRole($permission->roles);
  }
}
