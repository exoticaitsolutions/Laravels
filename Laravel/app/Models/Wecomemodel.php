<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wecomemodel extends Model
{
    use HasFactory;
    Protected $fillable = ['name', 'email', 'password','filename'];
}
