<?php

namespace App\Filament\Resources\MenuKopiResource\Pages;

use App\Filament\Resources\MenuKopiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMenuKopis extends ListRecords
{
    protected static string $resource = MenuKopiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
