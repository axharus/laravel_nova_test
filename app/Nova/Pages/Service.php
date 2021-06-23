<?php


namespace App\Nova\Pages;


use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;

class Service
{

    public function fields()
    {
        return [
            Text::make('name'),
            Textarea::make('Ознакомительний тур','data->tour')->hideFromIndex(),
            Textarea::make('Онлайн просмотр','data->review')->hideFromIndex(),
            Textarea::make('Условия получения ипотеки','data->credit')->hideFromIndex(),
            Textarea::make('Послепродажный сервис','data->service')->hideFromIndex(),
            Textarea::make('Заключение договора онлайн','data->contract')->hideFromIndex(),
        ];

    }
}
