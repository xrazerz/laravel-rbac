<?php
namespace Dev\Rabc\Models;

use Illuminate\Database\Eloquent\Model;
use Dev\Rabc\Models\Permission;
use Dev\Rabc\Models\User;

class Role extends Model
{
    protected $fillable = ['name'];

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }

    public function user(){
        return $this->belongsToMany(User::class);
    }
}

