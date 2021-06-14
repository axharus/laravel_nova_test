<?php

namespace App\Nova;


use Illuminate\Http\Request;
use Laravel\Nova\Fields\Currency;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\Gravatar;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\HasManyThrough;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Password;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;

class Flat extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Flat::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make(__('ID'), 'id')->sortable(),
            Text::make('title'),
            Textarea::make('description'),
            Textarea::make('conditions'),
            Currency::make('price'),
            Image::make('Location','locationImage')->disk('public'),
            Number::make('square'),
            Text::make('Quantity of Balcony','quantityBalcony'),
            Text::make('Quantity of Bathroom','quantityBathroom'),
            Number::make( 'distance to sea','distanceToSea'),
            Date::make('end_date'),
            HasMany::make('layouts'),
            HasMany::make('infrastructures'),
            HasMany::make('multimedia'),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
