<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'call_sign',
        'email',
        'joined_date',
        'released_date',
        'is_active',
    ];

    public function delayReports(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(DelayReport::class);
    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    public function leaves()
    {
        return $this->hasMany(Leave::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'email', 'email');
    }

}
