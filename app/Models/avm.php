<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class avm extends Model
{
    use HasFactory;

    protected $fillable = [
        'vision',
        'mission',
        'about',
       
    ];
}
