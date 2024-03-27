<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventTypeResource\Pages;
use App\Filament\Resources\EventTypeResource\RelationManagers;
use App\Models\EventType;
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

class EventTypeResource extends Resource
{
    protected static ?string $model = EventType::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $modelLevel = 'EventServises';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('type')
                ->options([
                    'event' => 'Event'
                ])->required(true),
                TextInput::make('intro')->label('Summery')->rules(['min:10','max:150'])->required(true),
                TextInput::make('subject')->label('Subject')->rules(['min:4','max:30']),
                TextInput::make('price')->label('Price'),
                FileUpload::make('img')
                ->directory('img/event')
                ->image()
                ->imageResizeMode('cover')
                ->imageResizeTargetWidth('1024')
                ->imageResizeTargetHeight('680')
                ->imagePreviewHeight('400')
                ->required(true),
                MarkdownEditor::make('content')->required(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(true)->searchable(true),
                TextColumn::make('type')->sortable(true)->searchable(true),
                TextColumn::make('intro')->sortable(true)->searchable(true),
                TextColumn::make('name')->sortable(true)->searchable(true),
                TextColumn::make('subject')->sortable(true)->searchable(true)->label('Event Type'),
                TextColumn::make('price')->sortable(true)->searchable(true)->label('Price'),
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
            'index' => Pages\ListEventTypes::route('/'),
            'create' => Pages\CreateEventType::route('/create'),
            'edit' => Pages\EditEventType::route('/{record}/edit'),
        ];
    }
}
