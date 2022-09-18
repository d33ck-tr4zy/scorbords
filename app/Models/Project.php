<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function developer(){
        return $this->belongsToMany(Developer::class);
    }

    public function delayReports(){
        return $this->hasMany(DelayReport::class);
    }
}
