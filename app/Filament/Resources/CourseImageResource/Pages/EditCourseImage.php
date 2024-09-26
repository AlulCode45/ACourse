<?php

namespace App\Filament\Resources\CourseImageResource\Pages;

use App\Filament\Resources\CourseImageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCourseImage extends EditRecord
{
    protected static string $resource = CourseImageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
