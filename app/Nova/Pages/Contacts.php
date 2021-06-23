<?php


namespace App\Nova\Pages;


use Bissolli\NovaPhoneField\PhoneNumber;
use Eminiarts\Tabs\Tab;
use Eminiarts\Tabs\Tabs;
use Laravel\Nova\Fields\Text;
use NovaItemsField\Items;

class Contacts
{
    public function fields()
    {
        return [
            Text::make('Название','name'),

            Tabs::make('Contacts',[
                Tab::make('Messengers',[
                    Text::make('Telegram','data->telegram')->hideFromIndex(),
                    Text::make('Viber','data->viber')->hideFromIndex(),
                    Text::make('WhatsApp','data->whatsapp')->hideFromIndex(),
                ]),
                Tab::make('Email/Phone',[
                    Text::make('Email','data->email')->rules('email')->hideFromIndex(),
                    PhoneNumber::make('Phone','data->phone')->hideFromIndex(),
                ]),
                Tab::make('Address/WorkTime',[
                    Text::make('Address','data->address')->hideFromIndex(),
                    Items::make('Working time','data->working_time')->placeholder('Add condition')->hideFromIndex(),
                ]),
                Tab::make('SocialMedia',[
                    Text::make('Instagram','data->instagram')->hideFromIndex(),
                    Text::make('Facebook','data->facebook')->hideFromIndex(),
                    Text::make('Twitter','data->twitter')->hideFromIndex(),
                ]),
                Tab::make('Coordinates',[
                    Text::make('Довгота','data->longitude')->hideFromIndex(),
                    Text::make('Широта','data->latitude')->hideFromIndex(),
                ]),
            ])->withToolbar(),










        ];

    }
}
