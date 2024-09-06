<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coc extends Model
{
    use HasFactory;
    protected $table = 'coc';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = ['Uname',
        'fname', 'mname', 'lname', 'renhour', 'rentype', 
        'position','course', 'sday', 'eday', 'gday',
        'p1name', 'p1position', 'p1email', 
        'p2name', 'p2position', 'p2email'
    ];

    
}
