<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }


    protected function mutateFormDataBeforeFill(array $data): array
    {
        $data['currencies'] = array_map(
            fn($balance, $currency) => ['currency' => $currency, 'balance' => $balance],
            $data['currencies'],
            array_keys($data['currencies'])
        );

        return $data;
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        $data['currencies'] = array_reduce(
            $data['currencies'],
            function ($currencies, $currency) {
                $currencies[$currency['currency']] = $currency['balance'];
                return $currencies;
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
        return 'User updated successfully!';
    }
}
