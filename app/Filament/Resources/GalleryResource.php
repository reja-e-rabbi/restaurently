<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GalleryResource\Pages;
use App\Filament\Resources\GalleryResource\RelationManagers;
use App\Models\Gallery;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GalleryResource extends Resource
{
    protected static ?string $model = Gallery::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->label('Name')->rules(['min:3','max:32'])->required(true),
                FileUpload::make('img')
                ->directory('img/gallery')
                ->image()
                ->imageResizeMode('cover')
                ->imageResizeTargetWidth('800')
                ->imageResizeTargetHeight('600')
                ->imagePreviewHeight('400')
                ->required(true)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(true)->searchable()->toggleable(true),
                ImageColumn::make('avatar')
                ->height(150)
                ->width(200)
                ->defaultImageUrl(function ( $record) {
                    return $record->img ? url('storage/' . $record->img) : url('storage/img/testimonials/testimonials-5.jpg');
                    //return url('storage/img/testimonials/testimonials-5.jpg');
                })->toggleable(true)
                ->label('img'),
                TextColumn::make('name')->label('Name')->toggleable(true)->searchable(),
                TextColumn::make('created_at')->label('Upload date')->date()->toggleable(true)->searchable(),
                TextColumn::make('updated_at')->date()->toggleable(true)->label('Update Date')->searchable(),
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
            'index' => Pages\ListGalleries::route('/'),
            'create' => Pages\CreateGallery::route('/create'),
            'edit' => Pages\EditGallery::route('/{record}/edit'),
        ];
    }
}
