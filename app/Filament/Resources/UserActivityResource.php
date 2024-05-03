<?php

namespace App\Filament\Resources;

use App\Enums\Activity;
use App\Filament\Resources\UserActivityResource\Pages;
use App\Filament\Resources\UserActivityResource\RelationManagers;
use App\Filament\Resources\UserActivityResource\Widgets\DailyLogins;
use App\Filament\Resources\UserActivityResource\Widgets\TopUsedEquipments;
use App\Models\UserActivity;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\Enums\MaxWidth;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserActivityResource extends Resource
{
    protected static ?string $model = UserActivity::class;

    protected static ?string $navigationIcon = 'heroicon-o-cursor-arrow-ripple';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->disabledOn('edit')
                    ->relationship('user', 'name')
                    ->required(),
                Forms\Components\Select::make('activity')
                    ->options(Activity::class)
                    ->required(),
                Forms\Components\DateTimePicker::make('performed_at')
                    ->displayFormat('M j, Y, g:i A')
                    ->native(false)
                    ->required(),
                Forms\Components\KeyValue::make('meta')
                    ->columnSpanFull()
                    ->required(),
            ])
            ->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('performed_at', 'desc')
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('activity')
                    ->formatStateUsing(fn(string $state): string => Activity::from($state)->getLabel())
                    ->badge()
                    ->searchable(),
                Tables\Columns\TextColumn::make('meta')
                    ->searchable(),
                Tables\Columns\TextColumn::make('performed_at')
                    ->dateTime('M j, Y, g:i A')
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('user_id')
                    ->relationship('user', 'name')
                    ->preload()
                    ->searchable()
                    ->label('User'),
                Tables\Filters\SelectFilter::make('activity')
                    ->options(Activity::class)
                    ->label('Activity'),
                Tables\Filters\Filter::make('performed_at')
                    ->columnSpanFull()
                    ->form([
                        Forms\Components\Grid::make()
                        ->schema([
                            Forms\Components\DatePicker::make('from')->native(false),
                            Forms\Components\DatePicker::make('to')->native(false),
                        ])
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query->when($data['from'], fn(Builder $query, string $from): Builder => $query->where('performed_at', '>=', $from))
                            ->when($data['to'], fn(Builder $query, string $to): Builder => $query->where('performed_at', '<=', $to));
                    })
                    ->indicateUsing(function (array $data): ?string {
                        $indicator = "";

                        if ($data['from'] && $data['to']) {
                            $from = now()->parse($data['from']);
                            $to = now()->parse($data['to']);
                            $indicator = "{$from->format('M j, Y')} - {$to->format('M j, Y')}";
                        } elseif ($data['from']) {
                            $from = now()->parse($data['from']);
                            $indicator = "From {$from->format('M j, Y')}";
                        } elseif ($data['to']) {
                            $to = now()->parse($data['to']);
                            $indicator = "To {$to->format('M j, Y')}";
                        }

                        return $indicator ?: null;
                    }),
            ])
            ->filtersFormColumns(2)
            ->filtersFormWidth(MaxWidth::TwoExtraLarge)
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUserActivities::route('/'),
        ];
    }

    public static function getWidgets(): array
    {
        return [
            TopUsedEquipments::class,
            DailyLogins::class
        ];
    }
}
