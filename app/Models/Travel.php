<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    use HasFactory;

    protected $fillable = [

        'title',
        'producer',
        'description',
        'cover'
    ];
     protected $table = 'travels';

    
}
