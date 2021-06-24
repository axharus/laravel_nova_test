<?php
namespace App\Observers;

use App\Heplers\Slug;
use App\Models\Flat;
use Illuminate\Support\Str;

class FlatObserver
{
    public function creating(Flat $flat)
    {
        $flat->slug = Slug::getSlug($flat->title,'flats');
    }

//    public function updating(Flat $flat)
//    {
//        $this->setSlug($flat);
//    }
//
//    public function setSlug(Flat $flat)
//    {
//        if(empty($flat->slug)){
//            $flat->slug = Str::slug($flat->title);
//        }
//    }
}
