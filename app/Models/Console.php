<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Console extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
        'brand',
        'description',
        'user_id'


    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
