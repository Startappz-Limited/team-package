<?php

// packages/Startappz/Team/src/Models/Role.php
namespace Startappz\Team\Models;

use Illuminate\Database\Eloquent\Model;


class Role extends Model
{
    protected $fillable = ['name'];

    public function teamMembers()
    {
        return $this->hasMany(TeamMember::class);
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'role_permissions');
    }

    public function hasPermission($permissionName)
    {
        return $this->permissions->contains('name', $permissionName);
    }
}