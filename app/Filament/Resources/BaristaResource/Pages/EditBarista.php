<?php

namespace App\Filament\Resources\BaristaResource\Pages;

use App\Filament\Resources\BaristaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBarista extends EditRecord
{
    protected static string $resource = BaristaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
