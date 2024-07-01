<?php

namespace App\Filament\Resources\NoteTopicGroupResource\Pages;

use App\Filament\Resources\NoteTopicGroupResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Guava\FilamentNestedResources\Concerns\NestedPage;

class ListNoteTopicGroups extends ListRecords
{
    use NestedPage;

    protected static string $resource = NoteTopicGroupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            //
        ];
    }
}
