<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mon extends Model
{
    use HasFactory;
    protected $fillable = [
        'ten',
        'nganh_id',
        'ghi_chu',
        'tg_bat_dau',
        'tg_bket_thuc',
    ];
}
