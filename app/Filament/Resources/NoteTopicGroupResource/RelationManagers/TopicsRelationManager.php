<?php

namespace App\Filament\Resources\NoteTopicGroupResource\RelationManagers;

use App\Filament\Resources\NoteTopicGroupResource\Pages\ManageTopicPages;
use App\Filament\Resources\NoteTopicResource;
use App\Models\NoteTopic;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Support\Enums\MaxWidth;
use Filament\Tables;
use Filament\Tables\Table;
use Guava\FilamentNestedResources\Actions\NestedEditAction;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Livewire\Component;

class TopicsRelationManager extends RelationManager
{
//    use NestedEditAction;

    protected static string $relationship = 'topics';

    public function form(Form $form): Form
    {
        return $form
            ->columns(1)
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required(),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->searchable(false)
            ->defaultSort('order')
            ->reorderable('order')
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pages_count')
                    ->label('Pages')
                    ->counts('pages')
                    ->formatStateUsing(fn($state) => "$state page" . ($state === 1 ? '' : 's'))
                    ->url(fn(NoteTopic $record) => ManageTopicPages::getUrl([
                        'record' => $this->ownerRecord,
                        'topic' => $record
                    ])),
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->modalWidth(MaxWidth::Large),
                Tables\Actions\Action::make('pages')
                    ->label('Pages')
                    ->icon('heroicon-o-document-text')
                    ->url(fn(NoteTopic $record) => ManageTopicPages::getUrl([
                        'record' => $this->ownerRecord,
                        'topic' => $record
                    ])),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make()
                    ->label('New Topic')
                    ->modalWidth(MaxWidth::Large)
            ]);
    }
}
