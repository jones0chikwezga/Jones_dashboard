<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vacancy extends Model
{
    use HasFactory;

    protected $fillable = [
        'uploader',
        'position',
        'duties',
        'qualification',
        'closing_date',
        'file',
       
    ];
}
