<?php

namespace App\Filament\Resources\BaristaResource\Pages;

use App\Filament\Resources\BaristaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBaristas extends ListRecords
{
    protected static string $resource = BaristaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
