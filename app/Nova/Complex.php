<?php

namespace App\Nova;


use Ebess\AdvancedNovaMediaLibrary\Fields\Images;
use Eminiarts\Tabs\Tab;
use Eminiarts\Tabs\Tabs;
use Eminiarts\Tabs\TabsOnEdit;
use Illuminate\Http\Request;

use Laravel\Nova\Fields\Currency;
use Laravel\Nova\Fields\Date;

use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;
use NovaAttachMany\AttachMany;
use NovaItemsField\Items;

class Complex extends Resource
{
    use TabsOnEdit;

    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Complex::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

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
            Tabs::make('Complex',[
                Tab::make('Main',[
                    ID::make(__('ID'), 'id')->sortable(),
                    Text::make('title'),
                    Textarea::make('description'),
                    Textarea::make('conditions'),
                    Currency::make('price'),
                ]),
                Tab::make('Additional',[
                    Items::make('map')
                        ->max(2)
                        ->placeholder('Input coordinate')
                        ->listFirst(),
                    Number::make('square'),
                    Number::make( 'distance to sea','distanceToSea'),
                    Date::make('end_date'),
//                    BelongsToManyField::make('flats','flats',Flat::class)
//                        ->options(\App\Models\Flat::query()->where('complex_id','=',NULL)->orWhere('complex_id','=',$this->id)->get())
//                        ->hideFromIndex(),
//                    AttachMany::make('flats','flats',Flat::class)->showPreview(),
//                        ->rules('min:1',\App\Models\Flat::query()
//                            ->where('complex_id','=',NULL)
//                            ->orWhere('complex_id','=',$this->id)
//                            ->get())
//                HasMany::make('flats'),
                ]),
                Tab::make('Media',[
                    Images::make('Images','complex_image'),
                ]),
            ]),

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
