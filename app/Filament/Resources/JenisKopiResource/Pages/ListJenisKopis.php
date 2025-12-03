<?php

namespace App\Filament\Resources\JenisKopiResource\Pages;

use App\Filament\Resources\JenisKopiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJenisKopis extends ListRecords
{
    protected static string $resource = JenisKopiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
