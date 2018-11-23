<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

/* class User extends Authenticatable
{
    use Notifiable;

    
     * The attributes that are mass assignable.
     *
     * @var array
     
    protected $fillable = [
        'username', 'email', 'password',
    ];

    
     * The attributes that should be hidden for arrays.
     *
     * @var array
    
    protected $hidden = [
        'password', 'remember_token',
    ];
}
*/

class User extends Model
{

    protected $fillable = ['nama', 'email', 'password', 'user_role', 'username', 'password', 'nik'];
    



    public function anggota(){
        return $this->hasMany('App\Anggota');
    }
    
}
