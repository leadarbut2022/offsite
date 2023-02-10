<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hagez extends Model
{
    use HasFactory;
    protected $table = 't_m_p';
    protected $fillable = [
        'id_user',
        'id_p',
        'from',
        'to',
        'prise',
        'maney_h',
        'name_std',
        'name_plyer',
       

 
    ];
}
