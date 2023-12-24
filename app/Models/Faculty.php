<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model 
{
    use HasFactory;
    protected $table = 'facultymst';

    public $timestamps = false;
    protected $primaryKey = 'faculty_id';

        protected $fillable = [
        'faculty_name',
        'faculty_email',
        'faculty_contactno',
    ];
}
