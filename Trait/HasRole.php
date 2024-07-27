<?php
namespace Dev\Rabc\Trait;
use Dev\Rabc\Models\Role;
use Dev\Rabc\Models\Permission;
trait HasRole
{
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
    public function hasRole($role)
    {
        return $this->roles()->where('name', $role)->exists();
    }
    public function hasPermission($permission)
    {
        return $this->roles()->whereHas('permissions', function ($query) use ($permission) {
            $query->where('name', $permission);
        })->exists();
    }
    public function assignRole($role)
    {
        return $this->roles()->attach($role);
    }
}