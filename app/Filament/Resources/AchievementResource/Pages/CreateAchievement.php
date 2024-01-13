<?php

namespace App\Filament\Resources\AchievementResource\Pages;

use App\Filament\Resources\AchievementResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAchievement extends CreateRecord
{
    protected static string $resource = AchievementResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
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
}
