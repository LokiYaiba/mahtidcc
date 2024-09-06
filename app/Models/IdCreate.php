<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdCreate extends Model
{
    // Define the table name if it doesn't follow Laravel's convention
    protected $table = 'students';

    // If you are using a primary key other than 'id', define it
    protected $primaryKey = 'id';

    // If your photo is stored as a binary, ensure it's cast correctly
    protected $casts = [
        'pic' => 'string',
        'sig' => 'string', // or 'string' if using base64
    ];
}
