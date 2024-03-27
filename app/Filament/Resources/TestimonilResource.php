<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TestimonilResource\Pages;
use App\Filament\Resources\TestimonilResource\RelationManagers;
use App\Models\Testimonil;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TestimonilResource extends Resource
{
    protected static ?string $model = Testimonil::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-right';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->label('Name')->rules(['min:3','max:32'])->required(true),
                TextInput::make('profession')->label('Your Profession')->rules(['min:3','max:32'])->required(true),
                Textarea::make('dilog')->label('Testimonil')->rules(['min:5','max:120'])->required(true),
                FileUpload::make('img')
                ->directory('img/testimonials')
                ->image()
                ->imageResizeMode('cover')
                ->imageResizeTargetWidth('400')
                ->imageResizeTargetHeight('400')
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
                ->height(50)
                ->width(50)
                ->defaultImageUrl(function ( $record) {
                    return $record->img ? url('storage/' . $record->img) : url('storage/img/testimonials/testimonials-5.jpg');
                    //return url('storage/img/testimonials/testimonials-5.jpg');
                })->toggleable(true)
                ->label('img'),
                TextColumn::make('name')->searchable(),
                TextColumn::make('profession')->sortable(true)->searchable()->toggleable(true),
                TextColumn::make('dilog')->toggleable(true),
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
            'index' => Pages\ListTestimonils::route('/'),
            'create' => Pages\CreateTestimonil::route('/create'),
            'edit' => Pages\EditTestimonil::route('/{record}/edit'),
        ];
    }
}
