<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PublicPageResource\Pages;
use App\Filament\Resources\PublicPageResource\RelationManagers;
use App\Models\PublicPage;
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

class PublicPageResource extends Resource
{
    protected static ?string $model = PublicPage::class;

    protected static ?string $navigationIcon = 'heroicon-o-puzzle-piece';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('content')->label('Summery')->rules(['min:1','max:150'])->required(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(true)->searchable(true),
                TextColumn::make('subject')->sortable(true)->searchable(true)->label('Type'),
                TextColumn::make('content')->sortable(true)->searchable(true)->label('Content'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            /*->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])*/;
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
            'index' => Pages\ListPublicPages::route('/'),
            'create' => Pages\CreatePublicPage::route('/create'),
            'edit' => Pages\EditPublicPage::route('/{record}/edit'),
        ];
    }
}
