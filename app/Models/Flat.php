<?php

namespace App\Models;

use App\Filters\QueryFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Laravel\Nova\Query\Builder;

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

    protected $casts =[
        'end_date'=>'date'
    ];

    use HasFactory;

    public function layouts()
    {
        return $this->belongsToMany(Layout::class);
    }

    public function infrastructures()
    {
        return $this->belongsToMany(Infrastructure::class);
    }
    public function multimedia()
    {
        return $this->HasMany(Multimedia::class);
    }

    /**
     * Scope a query to only include popular users.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
//    public function scopeFilter($query,$operator)
//    {
//        return $query->where('end_date',$operator,now());
//    }
    /**
     * Scope a query to only include popular users.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePrice($query,$price)
    {
//        dd($price-20000);
        if ($price !='all')
//        $price = $price+0;
        if ($price<80000)
        return $query->where('price','>',$price)->where('price','<',$price+20000);
        else
            return $query->where('price','>',$price);
    }
    /**
     * Scope a query to only include popular users.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
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
