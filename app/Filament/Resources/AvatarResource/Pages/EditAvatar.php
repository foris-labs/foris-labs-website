<?php

namespace App\Filament\Resources\AvatarResource\Pages;

use App\Filament\Resources\AvatarResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAvatar extends EditRecord
{
    protected static string $resource = AvatarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        $data['price'] = array_map(
            fn($amount, $currency) => ['currency' => $currency, 'amount' => $amount],
            $data['price'],
            array_keys($data['price'])
        );

        return $data;
    }

    protected function mutateFormDataBeforeSave(array $data): array
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

    protected function getSavedNotificationTitle(): ?string
    {
        return 'Avatar updated successfully!';
    }
}
