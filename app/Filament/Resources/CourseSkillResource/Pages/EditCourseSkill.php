<?php

namespace App\Filament\Resources\CourseSkillResource\Pages;

use App\Filament\Resources\CourseSkillResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCourseSkill extends EditRecord
{
    protected static string $resource = CourseSkillResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
