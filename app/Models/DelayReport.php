<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DelayReport extends Model
{
    use HasFactory;
    protected $fillable = [
        'developer_id',
        'project_id',
        'date',
        'project_hours',
        'additional_hours',
    ];

    public function delayReasons()
    {
        return $this->belongsToMany(DelayReason::class);
    }
}
