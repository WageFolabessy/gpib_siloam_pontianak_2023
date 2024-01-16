<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendeta extends Model
{
    use HasFactory;

    protected $dateFormat = 'Y-m-d H:i:s';
    
    protected $fillable = [
        'nama',
        'kategori'
    ];
}
