<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UsersModel extends Model
{
    public $table="users";
    public $primaryKey="user_id";
    public $timestamps=false;
    protected $guarded = [];
}
