<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $fillable = [
        'name',
        'surname',
        'email',
        'date_of_birth',
        'address',
        'phone',
        'is_admin',
        'remember_token',
        'deleted_at',
        'created_at',
        'updated_at',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
