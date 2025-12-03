<?php

namespace App\Filament\Resources\JenisKopiResource\Pages;

use App\Filament\Resources\JenisKopiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJenisKopi extends EditRecord
{
    protected static string $resource = JenisKopiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
