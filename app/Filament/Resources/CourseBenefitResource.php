<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CourseBenefitResource\Pages;
use App\Filament\Resources\CourseBenefitResource\RelationManagers;
use App\Models\CourseBenefit;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CourseBenefitResource extends Resource
{
    protected static ?string $model = CourseBenefit::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static bool $shouldRegisterNavigation = false;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCourseBenefits::route('/'),
            'create' => Pages\CreateCourseBenefit::route('/create'),
            'edit' => Pages\EditCourseBenefit::route('/{record}/edit'),
        ];
    }
}