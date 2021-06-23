<?php


namespace App\Nova\Pages;


use Emilianotisato\NovaTinyMCE\NovaTinyMCE;
use Eminiarts\Tabs\Tab;
use Eminiarts\Tabs\Tabs;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use NovaItemsField\Items;
use Whitecube\NovaFlexibleContent\Flexible;

class Index
{
    public function fields()
    {
        return [

            Text::make('name'),


            Tabs::make('Contacts',[
                Tab::make('Main',[
                    Text::make('title','data->title')->hideFromIndex(),
                    Markdown::make('Why Mersin?','data->why_mersin')->hideFromIndex(),
                ]),
                Tab::make('Benefits',[

                    Flexible::make('Переваги', 'data->')
                        ->addLayout('tewer', 'item', [
                            Text::make('Назва переваги','title')->hideFromIndex(),
                            Textarea::make('Перевага','content')->hideFromIndex(),
                        ])
                ]),
                Tab::make('SEO',[
                    Markdown::make('SEO text','data->seo_text')->hideFromIndex(),
                ]),
            ]),
        ];

    }
}
