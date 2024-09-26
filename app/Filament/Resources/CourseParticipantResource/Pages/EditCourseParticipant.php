<?php

namespace App\Filament\Resources\CourseParticipantResource\Pages;

use App\Filament\Resources\CourseParticipantResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCourseParticipant extends EditRecord
{
    protected static string $resource = CourseParticipantResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
