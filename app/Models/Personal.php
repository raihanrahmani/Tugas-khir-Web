<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;

    protected $attributes = [];
    protected  $fillable = [
        'nama',
        'email',
        'nomor_hp',
        'negara',
        'password'
    ];
}
