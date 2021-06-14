<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flat extends Model
{
    protected $fillable = [
        'title',
        'description',
        'price',
        'conditions',
        'locationImage',
        'square',
        'distanceToSea',
        'endDate',
    ];

    use HasFactory;

    public function layouts(){
        return $this->hasMany(Layout::class);
    }

    public function infrastructures(){
        return $this->hasMany(Infrastructure::class);
    }

    public function multimedia(){
        return $this->hasMany(Multimedia::class);
    }
}
