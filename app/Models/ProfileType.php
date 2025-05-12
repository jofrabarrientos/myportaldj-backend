<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ProfileType extends Model
{
    use Notifiable;
    protected $fillable = [
        'description'
    ];
}
