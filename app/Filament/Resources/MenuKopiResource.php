<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MenuKopiResource\Pages;
use App\Filament\Resources\MenuKopiResource\RelationManagers;
use App\Models\MenuKopi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MenuKopiResource extends Resource
{
    protected static ?string $model = MenuKopi::class;

    protected static ?string $navigationIcon = 'heroicon-o-fire';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_menu')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('harga')
                    ->required()
                    ->numeric(),
                Forms\Components\Select::make('jenis_id')
                    ->relationship('jenis', 'nama_jenis')
                    ->required(),
                Forms\Components\Select::make('barista_id')
                    ->relationship('barista', 'nama_barista')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_menu')
                    ->searchable(),
                Tables\Columns\TextColumn::make('harga')
                ->label('Harga')
                ->formatStateUsing(function ($state) {
                 return 'Rp ' . number_format($state * 1000, 0, ',', '.');
                }),
                Tables\Columns\TextColumn::make('jenis.nama_jenis')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('barista.nama_barista')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListMenuKopis::route('/'),
            'create' => Pages\CreateMenuKopi::route('/create'),
            'edit' => Pages\EditMenuKopi::route('/{record}/edit'),
        ];
    }
}
