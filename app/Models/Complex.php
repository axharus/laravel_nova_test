<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Complex extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    protected $casts =[
        'end_date'=>'date',
        'map'     =>'array'
    ];
    public function flats()
    {
        return $this->hasMany(Flat::class);
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(130)
            ->height(130);
    }

    public function registerMediaCollections(): void
    {
//        $this->addMediaCollection('flat_image')->singleFile();
        $this->addMediaCollection('my_multi_collection');
    }
}
