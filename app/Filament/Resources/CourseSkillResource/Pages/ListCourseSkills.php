<?php

namespace App\Filament\Resources\CourseSkillResource\Pages;

use App\Filament\Resources\CourseSkillResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCourseSkills extends ListRecords
{
    protected static string $resource = CourseSkillResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
