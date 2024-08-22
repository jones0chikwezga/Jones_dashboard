<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Followup extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'case_id',
        'user_id',
        'comment',
       
    ];
}
