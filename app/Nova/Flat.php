<?php

namespace App\Nova;



use Ebess\AdvancedNovaMediaLibrary\Fields\Images;
use Eminiarts\Tabs\Tab;
use Eminiarts\Tabs\Tabs;
use Eminiarts\Tabs\TabsOnEdit;
use Illuminate\Foundation\Http\MaintenanceModeBypassCookie;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\Currency;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\BelongsTo;

use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Password;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use NovaAttachMany\AttachMany;
use NovaItemsField\Items;

class Flat extends Resource
{
    use TabsOnEdit;
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
            Tabs::make('Flat',[

               Tab::make('Main',[

                   ID::make(__('ID'), 'id')->sortable(),
//                   Heading::make("<a href='".env('APP_ENV')."/flat/$this->slug'>".env('APP_ENV')."/flat/$this->slug</a>")
//                       ->asHtml()
//                       ->hideWhenCreating(),
                   Text::make('title'),
                   Textarea::make('description'),
                   Textarea::make('conditions'),
                   Currency::make('price'),
               ]),
                Tab::make('Media',[
                    Images::make('Images','flat_image'),
                ]),
                Tab::make('Advanced',[
                    Items::make('map')
                        ->max(2)
                        ->placeholder('Input coordinate')
                        ->listFirst(),
                    Number::make('square'),
                    Text::make('Quantity of Balcony','quantityBalcony'),
                    Text::make('Quantity of Bathroom','quantityBathroom'),
                    Number::make( 'distance to sea','distanceToSea'),
                    Date::make('end_date'),
                ]),
                Tab::make('Attachment',[
                    BelongsTo::make('complex','complex',Complex::class)->nullable(),
                    AttachMany::make('layouts', 'layouts', Layout::class),
                    AttachMany::make('infrastructures', 'infrastructures', Infrastructure::class),
                ]),
            ])->withToolbar(),






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
