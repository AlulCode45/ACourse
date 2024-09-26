<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CourseResource\Pages;
use App\Filament\Resources\CourseResource\RelationManagers;
use App\Models\Course;
use App\Models\Tools;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CourseResource extends Resource
{
    protected static ?string $model = Course::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Kelola Kursus';
    protected static ?string $title = 'Kelola Kursus';
    protected static ?string $navigationGroup = 'Kursus';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()->schema([
                    Repeater::make('course_images')
                        ->label('Thumbnail Kursus')
                        ->relationship('course_images')
                        ->schema([
                            FileUpload::make('path')
                                ->directory('course_images')
                                ->visibility('public'),
                        ])
                        ->columns(1),
                    TextInput::make('name')->label('Nama Kursus'),
                    RichEditor::make('description')->label('Deskripsi'),
                    TextInput::make('price')->numeric()->label('Harga'),
                    RichEditor::make('requirement')->label('Syarat'),
                    // Repeater::make('course_tools')
                    // ->label('Tools Diperlukan')
                    // ->relationship('course_tools')
                    // ->schema([

                    // ])
                    Select::make('course_tools')  // Nama field yang sesuai dengan relasi Many-to-Many
                        ->relationship('course_tools', 'name')  // Mengambil relasi 'tools' dan menampilkan nama tool
                        ->multiple()                     // Mengizinkan pemilihan banyak tool
                        ->preload()                      // Preload semua data relasi
                        ->searchable(),              // Menambahkan pencarian jika data banyak


                    TextInput::make('total_time')->numeric()->label('Total Waktu Belajar'),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('course_images.path')
                    ->label('Thumbnail')
                    ->limit(1),
                TextColumn::make('name')
                    ->label('Nama Kursus'),
                TextColumn::make('price')
                    ->label('Harga Kursus')
                    ->numeric(),
                TextColumn::make('total_time')
                    ->label('Waktu Belajar')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListCourses::route('/'),
            'create' => Pages\CreateCourse::route('/create'),
            'edit' => Pages\EditCourse::route('/{record}/edit'),
        ];
    }
}