<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'profile_photo_url'];


    public function services()
    {
        return $this->belongsToMany(Service::class);
    }
}
