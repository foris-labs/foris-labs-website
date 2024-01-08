<?php

namespace App\Filament\Resources\UserResource\RelationManagers;

use App\Models\Avatar;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AvatarsRelationManager extends RelationManager
{
    protected static ?string $title = 'Owned Avatars';
    protected static string $relationship = 'avatars';

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
            ->columns([
                Tables\Columns\ImageColumn::make('image_url')
                    ->label('Image')
                    ->disk('public')
                    ->circular(),

                Tables\Columns\TextColumn::make('slug'),

                Tables\Columns\ToggleColumn::make('is_current')
                    ->label('Current')
                    ->afterStateUpdated(function (Avatar $avatar, $state) {
                        if (!$state) return;

                        $this->getOwnerRecord()->setCurrentAvatar($avatar);
//
//                        \DB::table('avatar_user')
//                            ->where('user_id', $this->getOwnerRecord()->id)
//                            ->where('avatar_id', '!=', $avatar->id)
//                            ->update(['is_current' => false]);
                    }),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\AttachAction::make()
                    ->label('Add Avatar')
                    ->modalHeading('Add Avatar')
                    ->preloadRecordSelect()
                    ->recordSelect(
                        fn(Forms\Components\Select $select) => $select->prefixIcon('heroicon-o-face-smile'),
                    )
                    ->form(fn(Tables\Actions\AttachAction $action): array => [
                        $action->getRecordSelect(),
                        Forms\Components\Toggle::make('is_current')->required(),
                    ]),
            ])
            ->actions([
                Tables\Actions\DetachAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DetachBulkAction::make(),
                ]),
            ]);
    }
}
