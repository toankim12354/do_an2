<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class giao_vu extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        
        'ten',
        'birthday',
        'gioi_tinh',
        'phone',
        'dia_chi',
        'email',
        'password',
        'role',
    ];
    
    public function getGioiTinhAttribute($value)
    {
        return ($value) ? 'Nam' :'Nu';
    }

    // public function getBirthdayAttribute($value)
    // {
    //     return \Carbon\Carbon::parse($value)->format('d-m-Y');
    // } 
}

