<?php

namespace App\Filament\Resources\AboutResource\Pages;

use App\Filament\Resources\AboutResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAbout extends EditRecord
{
    protected static string $resource = AboutResource::class;
    protected static ?string $title = 'Hakkımda Bilgilerini Düzenle';
    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()->label('Sil'),
        ];
    }
}
