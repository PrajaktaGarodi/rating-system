<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Court extends Model
{
    Use HasFactory;
    protected $fillable = ['court_name','vendor_id', 'address', 'contact', 'email', 'image', 'role_id','food_type','open_time','close_time','menu_img'];
}
