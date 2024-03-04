<?php

namespace App\Filament\Resources;

use App\Enums\Currency;
use App\Filament\Resources\AvatarResource\Pages;
use App\Models\Avatar;
use Filament\Actions\DeleteAction;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class AvatarResource extends Resource
{
    protected static ?string $model = Avatar::class;

    protected static ?string $navigationIcon = 'heroicon-o-face-smile';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->unique(Avatar::class, 'slug', ignoreRecord: true)
                    ->placeholder(__('Slug')),

                Forms\Components\FileUpload::make('image_url')
                    ->label('Image')
                    ->directory('avatars')
                    ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file, Get $get) {
                        return "{$get('slug')}.{$file->getClientOriginalExtension()}";
                    })
                    ->avatar()
                    ->image()
                    ->imageEditor()
                    ->imagePreviewHeight('150')
                    ->maxWidth('150'),

                Forms\Components\Repeater::make('price')
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
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image_url')
                    ->label('Image')
                    ->disk('public')
                    ->state(fn (Avatar $avatar) => $avatar->external_url)
                    ->circular(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('price')
                    ->label('Price')
                    ->badge()
                    ->separator()
                    ->getStateUsing(function (Avatar $avatar) {
                        $state = array_map(
                            fn($amount, $currency) => "$amount $currency",
                            $avatar->price,
                            array_keys($avatar->price)
                        );

                        if (empty($state)) {
                            return 'FREE';
                        }

                        return implode(', ', $state);
                    })
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('price')
                    ->label('Price')
                    ->placeholder('All')
                    ->trueLabel('Free')
                    ->falseLabel('Paid')
                    ->queries(
                        true: fn(Builder $query) => $query->where('price', \DB::raw("json_array()")),
                        false: fn(Builder $query) => $query->where('price', '!=', \DB::raw("json_array()")),
                        blank: fn(Builder $query) => $query,
                    )
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
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
            'index' => Pages\ListAvatars::route('/'),
            'create' => Pages\CreateAvatar::route('/create'),
            'edit' => Pages\EditAvatar::route('/{record}/edit'),
        ];
    }
}
