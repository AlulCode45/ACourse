<?php

namespace App\Filament\Resources\CourseParticipantResource\Pages;

use App\Filament\Resources\CourseParticipantResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCourseParticipants extends ListRecords
{
    protected static string $resource = CourseParticipantResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
