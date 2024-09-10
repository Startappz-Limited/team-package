<?php

// src/Models/Team.php
namespace Startappz\Team\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = ['name', 'description'];

    public function members()
    {
        return $this->hasMany(TeamMember::class);
    }
}