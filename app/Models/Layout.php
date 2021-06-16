<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layout extends Model
{
    use HasFactory;

    protected $fillable = [
        'title'
    ];

    public function flat(){
        return $this->belongsToMany(Flat::class);
    }

//    public function title()
//    {
//        return $this->title();
//    }
}
