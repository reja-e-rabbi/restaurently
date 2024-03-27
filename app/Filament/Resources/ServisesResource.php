<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServisesResource\Pages;
use App\Filament\Resources\ServisesResource\RelationManagers;
use App\Models\Servises;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;

class ServisesResource extends Resource
{
    protected static ?string $model = Servises::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';
    protected static ?string $modelLebel = 'Benifit';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('type')->label('Type')
                ->options([
                    'benifit' => 'Benifit',
                ])->required(true),
                TextInput::make('subject')->label('Title')->rules(['min:1','max:80'])->required(true),
                Textarea::make('content')->label('Descriptions')->rules(['min:1','max:250'])->required(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(true)->searchable(true)->toggleable(true),
                TextColumn::make('type')->sortable(true)->searchable(true)->toggleable(true),
                TextColumn::make('subject')->sortable(true)->searchable(true)->toggleable(true),
                TextColumn::make('content')->toggleable(true),
                TextColumn::make('created_at')->sortable(true)->searchable()->toggleable(true),
                TextColumn::make('updated_at')->sortable(true)->searchable()->toggleable(true),
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
            'index' => Pages\ListServises::route('/'),
            'create' => Pages\CreateServises::route('/create'),
            'edit' => Pages\EditServises::route('/{record}/edit'),
        ];
    }
}
