<?php

namespace App\Filament\Resources\CustomAppOfferingResource\Pages;

use App\Filament\Resources\CustomAppOfferingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCustomAppOffering extends EditRecord
{
    protected static string $resource = CustomAppOfferingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
