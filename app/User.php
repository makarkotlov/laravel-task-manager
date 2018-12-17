<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
<<<<<<< HEAD
        'name',
        'last_name',
        'patronymic',
        'email',
        'email_verified_at',
        'phone_number',
        'password',
        'department_id',
        'is_admin',
        'created_at',
        'updated_at',
=======
        'name', 'email', 'password',
>>>>>>> 28c13ecc60d20bc1514693c719585652efc161b3
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
<<<<<<< HEAD

    public function author()
    {
        return $this->hasMany('App\Task', 'id', 'author_id');
    }

    public function getDepartment()
    {
        return $this->belongsTo('App\Department', 'department_id');
    }

    public function getFullnameAttribute()
    {
        return "{$this->name} {$this->last_name} {$this->patronymic}";
    }
=======
>>>>>>> 28c13ecc60d20bc1514693c719585652efc161b3
}
