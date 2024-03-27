<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ChefsResource\Pages;
use App\Filament\Resources\ChefsResource\RelationManagers;
use App\Models\Chefs;
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


class ChefsResource extends Resource
{
    protected static ?string $model = Chefs::class;

    protected static ?string $navigationIcon = 'heroicon-o-cake';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->label('Name')->rules(['min:3','max:32'])->required(true),
                Select::make('type')->label('Rolls')
                ->options([
                    'Master Chefs' => 'Master Chefs',
                    'Chefs' => 'Chefs',
                    'Cook' => 'Cook',
                    'Patisser' => 'Patisser',
                    'Others' => 'Others',
                ])
                ->native(false)
                ->required(true),
                FileUpload::make('img')
                ->directory('img/chefs')
                ->image()
                ->imageResizeMode('cover')
                ->imageResizeTargetWidth('600')
                ->imageResizeTargetHeight('600')
                ->imagePreviewHeight('400')
                ->required(true)
                ->label('Image'),
                TextInput::make('twitter')->label('Twitter')->rules(['min:3','max:32'])->required(false),
                TextInput::make('facebook')->label('Facebook')->rules(['min:3','max:32'])->required(false),
                TextInput::make('insta')->label('Instagram')->rules(['min:3','max:32'])->required(false),
                TextInput::make('linkedin')->label('Linkedin')->rules(['min:3','max:32'])->required(false),
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
                TextColumn::make('type')->searchable()->label('Rols'),
                TextColumn::make('created_at')->label('join date')->date()->toggleable(true),
                TextColumn::make('updated_at')->date()->toggleable(true),
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
            'index' => Pages\ListChefs::route('/'),
            'create' => Pages\CreateChefs::route('/create'),
            'edit' => Pages\EditChefs::route('/{record}/edit'),
        ];
    }
}
