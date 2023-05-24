<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unlock extends Model
{
    use HasFactory;

    protected $fillable = [
        'rep_id',
        'company',
        'cnpj',
        'client_name',
        'responsible',
        'emergency',
    ];

    protected $casts = [
        'emergency' => 'boolean'
    ];
}
