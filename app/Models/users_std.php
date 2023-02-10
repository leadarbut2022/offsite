<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users_std extends Model
{
    use HasFactory;
    protected $table = 'stadum';
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'stat',
        'city',
        'name_studam',
        'work_h',
        'from',
        'to',
        'many_players',
        'type_std',
        'ather_inform',

 
    ];

}
