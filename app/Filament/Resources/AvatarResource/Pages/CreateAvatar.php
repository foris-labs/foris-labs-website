<?php

namespace App\Filament\Resources\AvatarResource\Pages;

use App\Filament\Resources\AvatarResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAvatar extends CreateRecord
{
    protected static string $resource = AvatarResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['price'] = array_reduce(
            $data['price'],
            function ($price, $currency) {
                $price[$currency['currency']] = $currency['amount'];
                return $price;
            }, []
        );

        return $data;
    }

    protected function getRedirectUrl(): string
    {
        return $this->previousUrl ?? $this->getResource()::getUrl('index');
    }

}
