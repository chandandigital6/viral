<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientLogo extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    protected $casts = [
        'image' => 'array',
    ];
}
