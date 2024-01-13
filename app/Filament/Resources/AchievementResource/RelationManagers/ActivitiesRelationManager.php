<?php

namespace App\Filament\Resources\AchievementResource\RelationManagers;

use App\Enum\Interval;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ActivitiesRelationManager extends RelationManager
{
    protected static ?string $title = 'Required Activities';
    protected static string $relationship = 'activities';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('slug')
            ->recordTitle(fn($record) => $record->title)
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('slug'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\AttachAction::make()
                    ->label('Add Activity')
                    ->modalHeading('Add Activity')
                    ->preloadRecordSelect()
                    ->form(fn(Tables\Actions\AttachAction $action): array => [
                        $action->getRecordSelect(),
                        Forms\Components\TextInput::make('completion_count')
                            ->label('Count to Complete')
                            ->required()
                            ->numeric()
                            ->minValue(1),
                        Forms\Components\Toggle::make('is_consecutive')
                            ->label('Is Consecutive?')
                            ->live()
                            ->default(false),

                        Forms\Components\Select::make('consecutive_interval')
                            ->options(Interval::class)
                            ->default(Interval::DAILY)
                            ->hidden(fn(Forms\Get $get) => !$get('is_consecutive')),

                    ])
            ])
            ->actions([
                Tables\Actions\DetachAction::make()
                ->label('Remove Activity'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
