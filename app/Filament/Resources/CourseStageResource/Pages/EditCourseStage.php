<?php

namespace App\Filament\Resources\CourseStageResource\Pages;

use App\Filament\Resources\CourseStageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCourseStage extends EditRecord
{
    protected static string $resource = CourseStageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
