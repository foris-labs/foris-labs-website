<?php

namespace App\Filament\Resources;

use App\Enum\Currency;
use App\Filament\Resources\AchievementResource\Pages;
use App\Filament\Resources\AchievementResource\RelationManagers;
use App\Models\Achievement;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AchievementResource extends Resource
{
    protected static ?string $model = Achievement::class;

    protected static ?string $navigationIcon = 'heroicon-o-trophy';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make( 'General Information')
                    ->columns()
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('slug')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Textarea::make('description')
                            ->maxLength(65535)
                            ->columnSpanFull(),
                        Forms\Components\Toggle::make('is_active')
                            ->required(),
                        Forms\Components\Repeater::make('reward')
                            ->schema([
                                Forms\Components\Grid::make()
                                    ->extraAttributes(['class' => 'filament-input-group'])
                                    ->schema([
                                        Forms\Components\Select::make('currency')
                                            ->native(false)
                                            ->options(Currency::class)
                                            ->distinct()
                                            ->fixIndistinctState(),
                                        Forms\Components\TextInput::make('amount')->live()->numeric()
                                    ])
                            ])
                            ->itemLabel(function (array $state) {
                                if (!isset($state['currency'])) {
                                    return null;
                                }

                                return Currency::from($state['currency'])->format($state['amount'] ?? 0);
                            })
                            ->grid()
                            ->columnSpan([
                                'md' => 1,
                                'lg' => 2,
                            ]),
                        Forms\Components\KeyValue::make('meta')
                            ->columnSpan([
                                'md' => 1,
                                'lg' => 2,
                            ]),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean(),
                Tables\Columns\TextColumn::make('reward')
                    ->badge()
                    ->separator()
                    ->getStateUsing(function (Achievement $achievement) {
                        $state = array_map(
                            fn($amount, $currency) => "$amount $currency",
                            $achievement->reward,
                            array_keys($achievement->reward)
                        );

                        return implode(', ', $state);
                    }),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\ActivitiesRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAchievements::route('/'),
            'create' => Pages\CreateAchievement::route('/create'),
            'edit' => Pages\EditAchievement::route('/{record}/edit'),
        ];
    }
}
