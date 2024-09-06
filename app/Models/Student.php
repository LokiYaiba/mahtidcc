<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    
    protected $table = 'students'; // Table name
    protected $primaryKey = 'id'; // Primary key column
    public $timestamps = true; // Timestamps enabled

    // Fillable attributes for mass assignment
    protected $fillable = [ 'Uname',
        'employeeid', 'fname','mname', 'lname', 'position', 'address', 'mobile', 'bday', 
        'hiredate', 'bloodtype', 'tinno', 'sssno', 'pagibigno', 'philno', 'ecname', 
        'ecrelationship', 'ecaddress', 'ecmobile', 'validity', 'pic', 'sig', 'is_archived'
    ];

    // Define relationships if any
    // For example, if a student has many docs
    public function documents()
    {
        return $this->hasMany(Document::class);
    }
}
