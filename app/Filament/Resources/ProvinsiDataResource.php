<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProvinsiDataResource\Pages;
use App\Filament\Resources\ProvinsiDataResource\RelationManagers;
use App\Models\Province;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProvinsiDataResource extends Resource
{
    protected static ?string $model = Province::class;

    protected static ?string $navigationIcon = 'heroicon-o-map';

    protected static ?string $navigationLabel = 'Provinsi';

    protected static ?string $modelLabel = 'Provinsi';

    protected static ?string $pluralModelLabel = 'Data Provinsi';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('id')
                    ->required()
                    ->maxLength(2)
                    ->label('Kode Provinsi'),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->label('Nama Provinsi'),
                Forms\Components\TextInput::make('alt_name')
                    ->maxLength(255)
                    ->label('Nama Alternatif'),
                Forms\Components\TextInput::make('latitude')
                    ->numeric()
                    ->required()
                    ->label('Garis Lintang'),
                Forms\Components\TextInput::make('longitude')
                    ->numeric()
                    ->required()
                    ->label('Garis Bujur'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('Kode')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama Provinsi')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('alt_name')
                    ->label('Nama Alternatif')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('latitude')
                    ->label('Garis Lintang')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('longitude')
                    ->label('Garis Bujur')
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
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
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
            'index' => Pages\ListProvinsiData::route('/'),
            'create' => Pages\CreateProvinsiData::route('/create'),
            'edit' => Pages\EditProvinsiData::route('/{record}/edit'),
        ];
    }
}
