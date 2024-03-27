<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutResource\Pages;
use App\Filament\Resources\AboutResource\RelationManagers;
use App\Models\About;
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
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;

class AboutResource extends Resource
{
    protected static ?string $model = About::class;

    protected static ?string $navigationIcon = 'heroicon-o-bars-3-bottom-right';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->label('Title')->rules(['min:10','max:100'])->required(true),
                Select::make('shows')->options([
                    'home' => 'Use It On Home Pages',
                    'blog' => 'Use It On Blog Pages',
                ])->required(true),
                FileUpload::make('img')
                ->directory('img/blog')
                ->image()
                ->imageResizeMode('cover')
                ->imageResizeTargetWidth('600')
                ->imageResizeTargetHeight('600')
                ->imagePreviewHeight('400')
                ->required(true)
                ->label('Image'),
                Textarea::make('summery')->rules(['min:10','max:200'])->required(true),
                RichEditor::make('detels')->label('Detels')->rules(['min:10','max:1000'])->required(true)
                ->columns(4),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(true)->searchable(true)->toggleable(true),
                ImageColumn::make('img')
                ->height(50)
                ->width(50)
                ->defaultImageUrl(function ( $record ) {
                    return $record->img ? url('storage/' . $record->img) : url('storage/img/testimonials/testimonials-5.jpg');
                })->toggleable(true)
                ->label('img'),
                TextColumn::make('title')->sortable(true)->searchable(true)->toggleable(true),
                TextColumn::make('shows')->sortable(true)->searchable(true)->toggleable(true),
                TextColumn::make('created_at')->sortable(true)->searchable(true)->toggleable(true),
                TextColumn::make('updated_at')->sortable(true)->searchable(true)->toggleable(true),
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
            'index' => Pages\ListAbouts::route('/'),
            'create' => Pages\CreateAbout::route('/create'),
            'edit' => Pages\EditAbout::route('/{record}/edit'),
        ];
    }
}
