<?php

namespace App\Models;

use Cknow\Money\Casts\MoneyIntegerCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'duration', 'price'];

    public function casts()
    {
        return [
            'price' => MoneyIntegerCast::class,
        ];
    }

    public function employees()
    {
        return $this->belongsToMany(Employee::class);
    }
}
