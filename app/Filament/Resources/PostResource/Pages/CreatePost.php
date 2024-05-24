<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\FileUpload;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class CreatePost extends CreateRecord
{
    protected static string $resource = PostResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = Auth::id();
        $data['slug'] = Str::slug($data['title']);

        if (isset($data['image_url']) && $data['image_url'] instanceof TemporaryUploadedFile) {
            $file = $data['image_url'];
            $fileName = $file->getClientOriginalName();
            $file->storeAs('public/img/blog_images', $fileName);
            $data['image_url'] = $fileName;
        }

        return $data;
    }
}
 
