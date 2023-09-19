<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomUser extends Model
{
    protected $table = 'users';
    protected $fillable = ['nom', 'email', 'mot_de_passe'];
}
