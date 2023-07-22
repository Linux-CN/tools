<?php

namespace App\Filament\Resources\FaucetResource\Pages;

use App\Filament\Resources\FaucetResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageFaucets extends ManageRecords
{
    protected static string $resource = FaucetResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
