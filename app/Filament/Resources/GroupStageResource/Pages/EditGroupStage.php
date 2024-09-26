<?php

namespace App\Filament\Resources\GroupStageResource\Pages;

use App\Filament\Resources\GroupStageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGroupStage extends EditRecord
{
    protected static string $resource = GroupStageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
