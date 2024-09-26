<?php

namespace App\Filament\Resources\GroupStageResource\Pages;

use App\Filament\Resources\GroupStageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGroupStages extends ListRecords
{
    protected static string $resource = GroupStageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
