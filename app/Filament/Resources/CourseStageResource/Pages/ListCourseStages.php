<?php

namespace App\Filament\Resources\CourseStageResource\Pages;

use App\Filament\Resources\CourseStageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCourseStages extends ListRecords
{
    protected static string $resource = CourseStageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
