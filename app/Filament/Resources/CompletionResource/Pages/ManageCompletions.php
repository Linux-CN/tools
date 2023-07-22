<?php

namespace App\Filament\Resources\CompletionResource\Pages;

use App\Filament\Resources\CompletionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageCompletions extends ManageRecords
{
    protected static string $resource = CompletionResource::class;

    protected function getActions(): array
    {
        return [
//            Actions\CreateAction::make(),
        ];
    }
}
