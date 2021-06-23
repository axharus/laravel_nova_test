<?php


namespace App\Nova\Pages;


use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use NovaItemsField\Items;

class About
{
    public function fields()
    {
        return [
            Text::make('Название','name'),

          Textarea::make('Вступ','data->intro')->hideFromIndex(),
          Text::make('Років на ринку','data->year')->hideFromIndex(),
          Text::make('Кількість комплексів','data->complex_quantity')->hideFromIndex(),
          Text::make('Кількість квартир','data->flat_quantity')->hideFromIndex(),
          Items::make('Переваги','data->advantages')->placeholder('Вкажіть перевагу')->hideFromIndex(),
          Textarea::make('Співпраця','data->cooperation')->hideFromIndex(),
        ];

    }
}
