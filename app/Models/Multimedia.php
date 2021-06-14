<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\MediaCollections\Models\Media;


class Multimedia extends Model
{
    use HasFactory;
    public function flat(){
        return $this->belongsTo(Flat::class);
    }




}
