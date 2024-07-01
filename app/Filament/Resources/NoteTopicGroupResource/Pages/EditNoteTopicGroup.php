<?php

namespace App\Filament\Resources\NoteTopicGroupResource\Pages;

use App\Filament\Resources\NoteTopicGroupResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Guava\FilamentNestedResources\Concerns\NestedPage;

class EditNoteTopicGroup extends EditRecord
{
    use NestedPage;

    protected static string $resource = NoteTopicGroupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getSavedNotificationTitle(): ?string
    {
        return 'Topic group updated successfully!';
    }
}
