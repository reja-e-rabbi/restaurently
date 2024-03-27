<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MenuResource\Pages;
use App\Filament\Resources\MenuResource\RelationManagers;
use App\Models\Menu;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\MarkdownEditor;

class MenuResource extends Resource
{
    protected static ?string $model = Menu::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->label('Name')->rules(['min:3','max:60'])->required(false),
                TextInput::make('price')->label('Price')->required(false),
                Select::make('type')->label('Type')
                ->options([
                    'starter' => 'Starter',
                    'salads' => 'Salads',
                    'special' => 'Specialty',
                    'lunch' => 'Lunch Special',
                    'dener' => 'Dener Special',
                ])
                ->native(false)
                ->required(true),
                TextInput::make('title')->label('Title')->rules(['min:3','max:100'])->required(false),
                Select::make('special')->label('Speciality')
                ->options([
                    'home' => 'Add it on Home Manue',
                    'no' => 'Do not Add it on Home Manue',
                    'special' => 'Add it on Home special Manue',
                ])
                ->native(false)
                ->required(true),
                MarkdownEditor::make('detels')->label('Detels')->rules(['min:3','max:300'])->required(false),
                FileUpload::make('img')
                ->directory('img/manue')
                ->image()
                ->imageResizeMode('cover')
                ->imageResizeTargetWidth('600')
                ->imageResizeTargetHeight('600')
                ->imagePreviewHeight('400')
                ->required(true)
                ->label('Image'),
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
                TextColumn::make('name')->sortable(true)->searchable()->toggleable(true),
                TextColumn::make('price')->sortable(true)->searchable()->toggleable(true),
                TextColumn::make('type')->sortable(true)->searchable()->toggleable(true),
                TextColumn::make('created_at')->sortable(true)->searchable()->toggleable(true)->date(),
                TextColumn::make('updated_at')->sortable(true)->searchable()->toggleable(true)->date(),
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
            'index' => Pages\ListMenus::route('/'),
            'create' => Pages\CreateMenu::route('/create'),
            'edit' => Pages\EditMenu::route('/{record}/edit'),
        ];
    }
}
