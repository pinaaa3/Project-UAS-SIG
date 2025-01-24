<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RegencyDataResource\Pages;
use App\Filament\Resources\RegencyDataResource\RelationManagers;
use App\Models\Regency;
use App\Models\Province;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RegencyDataResource extends Resource
{
    protected static ?string $model = Regency::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office-2';

    protected static ?string $navigationLabel = 'Kabupaten/Kota';

    protected static ?string $modelLabel = 'Kabupaten/Kota';

    protected static ?string $pluralModelLabel = 'Data Kabupaten/Kota';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('id')
                    ->required()
                    ->maxLength(4)
                    ->label('Kode Kabupaten/Kota'),

                Forms\Components\Select::make('province_id')
                    ->relationship('province', 'name')
                    ->searchable()
                    ->preload()
                    ->required()
                    ->label('Provinsi'),

                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->label('Nama Kabupaten/Kota'),

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

                Tables\Columns\TextColumn::make('province.name')
                    ->label('Provinsi')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('name')
                    ->label('Nama Kabupaten/Kota')
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
                Tables\Filters\SelectFilter::make('province_id')
                    ->relationship('province', 'name')
                    ->searchable()
                    ->preload()
                    ->label('Filter Provinsi')
                    ->multiple(),
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
            'index' => Pages\ListRegencyData::route('/'),
            'create' => Pages\CreateRegencyData::route('/create'),
            'edit' => Pages\EditRegencyData::route('/{record}/edit'),
        ];
    }
}
