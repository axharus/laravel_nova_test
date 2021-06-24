<?php


namespace App\Observers;


use App\Heplers\Slug;
use App\Models\Complex;
use Illuminate\Support\Str;

class ComplexObserver
{
    public function creating(Complex $complex)
    {
        $complex->slug = Slug::getSlug($complex->title,'complexes');
    }
//
//    public function updating(Complex $complex)
//    {
//        $this->setSlug($complex);
//    }

//    public function setSlug(Complex $complex)
//    {
//        if(empty($complex->slug)){
//            $complex->slug = Str::slug($complex->title);
//        }
//    }
}
