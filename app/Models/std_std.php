<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class std_std extends Model
{
    use HasFactory;
    protected $table = 'stadum_std';
    protected $fillable = [
        'id_',
        'name',
        'phone',
        'address',
        'from_',
        'to_',
        'prise',
        'std_inf',
        'id_user',
        'img',
        'type',

 
    ];

    

}
