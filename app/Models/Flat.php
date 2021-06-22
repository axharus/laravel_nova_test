<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Laravel\Nova\Query\Builder;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Flat extends Model implements HasMedia
{
    use InteractsWithMedia;
    use HasFactory;
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

    protected $casts =[
        'end_date'=>'date',

    ];



    public function complex()
    {
        return $this->belongsTo(Complex::class,'complex_id','id');
    }

    public function layouts()
    {
        return $this->belongsToMany(Layout::class);
    }

    public function infrastructures()
    {
        return $this->belongsToMany(Infrastructure::class);
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


    public function scopePrice($query,$price)
    {
        if ($price !='all')

        if ($price<80000)
        return $query->where('price','>',$price)->where('price','<',$price+20000);
        else
            return $query->where('price','>',$price);
    }

    public function scopeLayout($query,$title)
    {
        if($title != 'all')
        return $query->whereHas('layouts', function ($q) use($title){
            return $q->where('title', $title);
        });

    }

    public function scopeBuilt($query,$operator)
    {
        if($operator != 'all')
        return $query->where('end_date',$operator,now());
    }
}
