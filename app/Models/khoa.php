<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class khoa extends Model
{
    use HasFactory;
    protected $fillable = [
        'ten',
        'tg_bat_dau',
        'tg_bket_thuc',
        'ghi_chu',
    ];
    // public function getTgBatDauAttribute($value)
    // {
    //     return \Carbon\Carbon::parse($value)->format('d-m-Y');
    // }
    // public function getTgBketThucAttribute($value)
    // {
    //     return \Carbon\Carbon::parse($value)->format('d-m-Y');
    // }
}