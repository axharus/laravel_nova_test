<?php


namespace App\Heplers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class Slug
{
    public static function getSlug($title,$table)
    {
        $slug = Str::slug($title);
        $count = DB::table("$table")->whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();
        $slug = $count ? "{$slug}-{$count}" : $slug;
        return $slug;
    }
}
