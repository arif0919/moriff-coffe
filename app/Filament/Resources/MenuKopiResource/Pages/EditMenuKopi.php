<?php

namespace App\Filament\Resources\MenuKopiResource\Pages;

use App\Filament\Resources\MenuKopiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMenuKopi extends EditRecord
{
    protected static string $resource = MenuKopiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
