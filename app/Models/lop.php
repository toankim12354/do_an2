<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lop extends Model
{
    use HasFactory;
    protected $fillable = [
        'ten',
        'khoa_id',
        'nganh_id',
        'ghi_chu',
        'tg_bat_dau',
        'tg_bket_thuc',
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
