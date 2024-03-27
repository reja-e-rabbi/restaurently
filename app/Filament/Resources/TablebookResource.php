<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TablebookResource\Pages;
use App\Filament\Resources\TablebookResource\RelationManagers;
use App\Models\TableBook;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;


class TablebookResource extends Resource
{
    protected static ?string $model = Tablebook::class;

    protected static ?string $navigationIcon = 'heroicon-o-table-cells';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('statuses')->label('Rolls')
                ->options([
                    'active' => 'Active',
                    'reject' => 'Reject',
                    'complete' => 'Complete',
                    'shedule' => 'Shedule',
                    'Others' => 'Others',
                ])
                ->native(false)
                ->required(true)
                ->label('Select Statuses'),
                TextInput::make('ctable')->label('Table No')->rules(['min:1','max:300'])->required(true),
                TextInput::make('cdate')->label('Date')->rules(['min:1','max:32'])->required(true),
                TextInput::make('ctime')->label('Time')->rules(['min:1','max:32'])->required(true),
                TextInput::make('cpeople')->label('Total People')->rules(['min:1','max:12'])->required(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(true)->searchable()->toggleable(true),
                TextColumn::make('statuses')->sortable(true)->searchable()->toggleable(true)
                ->badge()
                ->color(fn (string $state): string => match ($state) {
                    'active' => 'gray',
                    'shedule' => 'warning',
                    'complete' => 'success',
                    'reject' => 'danger',
                    'others' => 'primary',
                }),
                TextColumn::make('cname')->sortable(true)->searchable()->toggleable(true)->label('Name'),
                TextColumn::make('cemail')->sortable(true)->searchable()->toggleable(true)->label('Email'),
                TextColumn::make('cphone')->sortable(true)->searchable()->toggleable(true)->label('Phone'),
                TextColumn::make('cdate')->sortable(true)->searchable()->toggleable(true)->label('Date'),
                TextColumn::make('ctime')->sortable(true)->searchable()->toggleable(true)->label('Time'),
                TextColumn::make('cpeople')->sortable(true)->searchable()->toggleable(true)->label('Set'),
                TextColumn::make('ctable')->sortable(true)->searchable()->toggleable(true)->label('Table'),
                TextColumn::make('created_at')->sortable(true)->searchable()->toggleable(true),
                TextColumn::make('updated_at')->sortable(true)->searchable()->toggleable(true),
                TextColumn::make('message')->sortable(true)->searchable()->toggleable(true)->label('Message'),
                
            ])
            ->filters([
                SelectFilter::make('status')
                ->options([
                   'active' => 'Active',
                   'shedule' => 'Shedule',
                   'complete' => 'Complete',
                   'reject' => 'Reject',
                   'others' => 'Others',
                ])
                ->attribute('Statuses')
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
            'index' => Pages\ListTablebooks::route('/'),
            'create' => Pages\CreateTablebook::route('/create'),
            'edit' => Pages\EditTablebook::route('/{record}/edit'),
        ];
    }
}
