<?php

namespace App\Filament\Resources\TematikDataResource\Pages;

use App\Filament\Resources\TematikDataResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTematikData extends EditRecord
{
    protected static string $resource = TematikDataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
