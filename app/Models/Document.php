<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = [
        'student_id',
        'docname',
        'docfile',
    ];
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
    // Remove any casting related to binary data
    // protected $casts = [
    //     'docfile' => 'binary',
    // ];
}
