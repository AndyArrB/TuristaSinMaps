<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhoneVerificationCode extends Model
{
    protected $fillable = ['telefono', 'codigo', 'expires_at'];
    protected $dates = ['expires_at'];
}
