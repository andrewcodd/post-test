<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
      'id', 'name', 'email', 'size', 'role', 'org', 'industry', 'level', 'country', 'agree', '_token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
  //  protected $hidden = [
  //      'remember_token',
  //  ];
}
