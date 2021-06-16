<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\HasMedia;

class Multimedia extends Model
{

    use HasFactory;
    public function flat(){
        return $this->belongsTo(Flat::class);
    }




}
