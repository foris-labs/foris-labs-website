<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\FileUpload;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Filament\Pages\Actions;

class EditPost extends EditRecord
{
    protected static string $resource = PostResource::class;

    protected function mutateFormDataBeforeSave(array $data): array
    {
        unset($data['user_id']);
        $data['slug'] = Str::slug($data['title']);

        if (isset($data['image_url']) && $data['image_url'] instanceof TemporaryUploadedFile) {
            $file = $data['image_url'];
            $fileName = $file->getClientOriginalName();
            $file->storeAs('public/img/blog_images', $fileName);
            $data['image_url'] = $fileName;
        }

        return $data;
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
