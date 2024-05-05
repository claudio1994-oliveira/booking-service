<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScheduleExclusion extends Model
{
    use HasFactory;

    public function casts()
    {
        return [
            'starts_at' => 'datetime',
            'ends_at' => 'datetime',

        ];
    }
}
