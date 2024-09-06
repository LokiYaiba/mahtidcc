<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Files extends Model
{
    use HasFactory;
    protected $table = 'docs';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = ['employee_id', 'name', 'file'];

    public function student()
    {
        return $this->belongsTo(Student::class, 'employeeid', 'employeeid');
    }
}
