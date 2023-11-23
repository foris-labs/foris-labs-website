<?php

namespace App\Filament\Pages;

use App\Settings\TriviaSettings as Settings;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;

class TriviaSettings extends SettingsPage
{
    protected static ?string $navigationGroup = 'Trivia';
    protected static ?string $navigationIcon = 'heroicon-o-adjustments-vertical';
    protected static ?int $navigationSort = 3;

    protected ?string $subheading = 'Configure trivia settings globally.';

    protected static string $settings = Settings::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TimePicker::make('startTime')
                    ->label('Starts At')
                    ->native(false)
                    ->format('h:i A')
                    ->required(),
                Forms\Components\TimePicker::make('endTime')
                    ->label('Stops At')
                    ->native(false)
                    ->format('h:i A')
                    ->required(),
                Forms\Components\TimePicker::make('resetTime')
                    ->label('Resets At')
                    ->native(false)
                    ->format('h:i A')
                    ->required(),
                Forms\Components\TextInput::make('questionPerDay')
                    ->integer()
                    ->label('Questions Per Day')
                    ->required(),
            ]);
    }

    protected function getSavedNotificationMessage(): ?string
    {
        return 'Trivia settings updated!';
    }
}
