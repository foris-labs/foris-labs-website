<?php

namespace App\Filament\Resources;

use App\Enum\Currency;
use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('username')
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('gender')
                    ->native(false)
                    ->options([
                        'male' => 'Male',
                        'female' => 'Female',
                        'other' => 'Other'
                    ]),

                Forms\Components\FileUpload::make('avatar_url')
                    ->label('Avatar')
                    ->directory('avatars')
                    ->avatar()
                    ->image()
                    ->imageEditor()
                    ->imagePreviewHeight('150')
                    ->maxWidth('150'),
                Forms\Components\Select::make('school_id')
                    ->relationship('school', 'name'),
                Forms\Components\Repeater::make('currencies')
                    ->schema([
                        Forms\Components\TextInput::make('balance')->numeric()
                    ])
                    ->addable(false)
                    ->itemLabel(fn(array $state) => Currency::toArray()[$state['currency']] ?? null)
                    ->grid()
                    ->columnSpan(2)

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('username')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('gender')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('avatar_url')
                    ->label('Avatar')
                    ->defaultImageUrl(asset('img/avatar.png'))
                    ->circular(),
                Tables\Columns\TextColumn::make('school.name')
                    ->placeholder('—')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
