<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DelayReason extends Model
{
    use HasFactory;

    protected $fillable = [
        'reason',
        'value',
        'description',
    ];

    public function delayReports()
    {
        return $this->belongsToMany(DelayReport::class);
    }
}
