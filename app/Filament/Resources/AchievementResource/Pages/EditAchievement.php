<?php

namespace App\Filament\Resources\AchievementResource\Pages;

use App\Filament\Resources\AchievementResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAchievement extends EditRecord
{
    protected static string $resource = AchievementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        $data['reward'] = array_map(
            fn($amount, $currency) => ['currency' => $currency, 'amount' => $amount],
            $data['reward'],
            array_keys($data['reward'])
        );

        return $data;
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        $data['reward'] = array_reduce(
            $data['reward'],
            function ($reward, $currency) {
                $reward[$currency['currency']] = $currency['amount'];
                return $reward;
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
        return 'Achievement updated successfully!';
    }
}
