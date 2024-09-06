<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coe extends Model
{
    use HasFactory;
    protected $table = 'coe';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = ['Uname','fname', 'mname','lname','jtype','position','dept', 'sday','eday','lday','gday', ];

}
