<?php

namespace App\Filament\Resources\AboutResource\Pages;

use App\Filament\Resources\AboutResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAbout extends CreateRecord
{
    protected static string $resource = AboutResource::class;
    protected static ?string $title = 'Hakkımda Bilgileri Ekle';

}
