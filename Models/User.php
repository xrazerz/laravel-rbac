<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Dev\Rabc\Trait\HasRole;

class User extends Authenticatable
{
    use HasRole;
}