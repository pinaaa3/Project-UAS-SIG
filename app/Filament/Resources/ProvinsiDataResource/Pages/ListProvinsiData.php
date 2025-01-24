<?php

namespace App\Filament\Resources\ProvinsiDataResource\Pages;

use App\Filament\Resources\ProvinsiDataResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProvinsiData extends ListRecords
{
    protected static string $resource = ProvinsiDataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
