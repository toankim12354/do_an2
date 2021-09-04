<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sinh_vien extends Model
{
    use HasFactory;

    protected $fillable = [
        'ten',
        'birthday',
        'dia_chi',
        'email',
        'phone',
        'gioi_tinh',
        'ghi_chu',
        'lop_id'
    ];

    public function lop() {
        return $this->belongsTo(lop::class, 'lop_id');
    }
      public function getGioiTinhAttribute($value)
    {
        return ($value) ? 'Nam' :'Nu';
    }

    // public function getBirthdayAttribute($value)
    // {
    //     return \Carbon\Carbon::parse($value)->format('d-m-Y');
    // }
}
//đấm bây h
//làm login hộ tôi đi :))

