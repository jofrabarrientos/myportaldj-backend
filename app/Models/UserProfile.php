<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class UserProfile extends Model
{
    use Notifiable;

    protected $fillable = [
        'first_name',
        'last_name',
        'description',
        'experience',
        'user_id',
        'profile_types_id'
    ];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function profileType(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(ProfileType::class, 'id', 'profile_types_id');
    }
}
