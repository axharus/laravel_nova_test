<?php

namespace App\Observers;

use App\Heplers\Slug;
use App\Models\Post;
use Illuminate\Support\Str;

class PostObserver
{
    public function creating(Post $post)
    {
        $post->slug = Slug::getSlug($post->title,'posts');
//        $this->setSlug($post);
    }

//    public function updating(Post $post)
//    {
//        $this->setSlug($post);
//    }
//
//    public function setSlug(Post $post)
//    {
//        if(empty($post->slug)){
//            $post->slug = Str::slug($post->title);
//        }
//    }
}
