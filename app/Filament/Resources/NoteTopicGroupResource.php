<?php

declare(strict_types=1);

namespace App\Filament\Resources;


use App\Filament\Resources\NoteTopicGroupResource\Pages;
use App\Filament\Resources\NoteTopicGroupResource\RelationManagers;
use App\Models\NoteTopicGroup;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class NoteTopicGroupResource extends Resource
{
    protected static ?string $model = NoteTopicGroup::class;

    protected static ?string $modelLabel = 'Topic Group';

    protected static ?string $slug = 'topic-groups';

    protected static ?string $navigationGroup = 'Lessons';

    protected static ?string $navigationIcon = 'heroicon-o-radio';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('subject_id')
                    ->relationship('subject', 'name')
                    ->preload()
                    ->required(),
                Forms\Components\TextInput::make('title')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('order')
            ->reorderable('order')
            ->columns([
                Tables\Columns\TextColumn::make('subject.name')
                    ->label('Subject')
                    ->badge(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('topics_count')
                    ->label('Topics')
                    ->counts('topics')
            ])
            ->filters([
                //
            ])
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
            RelationManagers\TopicsRelationManager::class
        ];
    }

    public static function getWidgets(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListNoteTopicGroups::route('/'),
            'edit' => Pages\EditNoteTopicGroup::route('/{record}/edit'),

            'topics.manage-pages' => Pages\ManageTopicPages::route('/{record}/topics/{topic}/pages'),

        ];
    }

    public static function getBreadcrumbRecordLabel(NoteTopicGroup $record): string
    {
        return $record->title;
    }
}
