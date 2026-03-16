<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;

class Profile extends Page
{
    protected string $view = 'filament.pages.profile';
    public function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('name')
                ->required(),

            TextInput::make('email')
                ->email(),

            TextInput::make('password')
                ->password()
                ->label('New password'),
        ]);
    }
}
