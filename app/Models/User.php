<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    public $timestamps = false;

    public $table = 'users';

    protected $hidden = ['password'];

    protected $fillable = ['id','nom','prenom','pseudo','password','statut','renit','email'];

    protected $attributes = [
        'statut' => 'null'
    ];


    public function getAuthPassword(){
        return $this->password;
    }

    public function isAdmin(){
        return $this->statut == 'admin';
    }

    public function isStudent(){
        return $this->statut == 'student';
    }



}
