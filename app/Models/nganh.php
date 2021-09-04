<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nganh extends Model
{
    use HasFactory;
    protected $fillable = [
        'ten',
       
        'ghi_chu',
    ];
    
}
