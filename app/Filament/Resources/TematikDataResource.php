<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TematikDataResource\Pages;
use App\Filament\Resources\TematikDataResource\RelationManagers;
use App\Models\ThematicData;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TematikDataResource extends Resource
{
    protected static ?string $model = ThematicData::class;

    protected static ?string $navigationIcon = 'heroicon-o-chart-bar';

    protected static ?string $navigationLabel = 'Data Tematik';

    protected static ?string $modelLabel = 'Data Tematik';

    protected static ?string $pluralModelLabel = 'Data-Data Tematik';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('regency_id')
                    ->relationship('regency', 'name')
                    ->searchable()
                    ->preload()
                    ->required()
                    ->label('Kabupaten/Kota'),

                Forms\Components\TextInput::make('population')
                    ->numeric()
                    ->required()
                    ->label('Jumlah Penduduk'),

                Forms\Components\TextInput::make('poverty_rate')
                    ->numeric()
                    ->required()
                    ->label('Tingkat Kemiskinan (%)')
                    ->suffix('%')
                    ->minValue(0)
                    ->maxValue(100),

                Forms\Components\TextInput::make('unemployment_rate')
                    ->numeric()
                    ->required()
                    ->label('Tingkat Pengangguran (%)')
                    ->suffix('%')
                    ->minValue(0)
                    ->maxValue(100),

                Forms\Components\TextInput::make('parks')
                    ->numeric()
                    ->required()
                    ->label('Jumlah Taman')
                    ->minValue(0),

                Forms\Components\TextInput::make('schools')
                    ->numeric()
                    ->required()
                    ->label('Jumlah Sekolah')
                    ->minValue(0),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('regency.name')
                    ->label('Kabupaten/Kota')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('regency.province.name')
                    ->label('Provinsi')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('population')
                    ->label('Jumlah Penduduk')
                    ->numeric()
                    ->sortable(),

                Tables\Columns\TextColumn::make('poverty_rate')
                    ->label('Tingkat Kemiskinan')
                    ->numeric(
                        decimalPlaces: 2,
                        decimalSeparator: ',',
                        thousandsSeparator: '.'
                    )
                    ->suffix('%')
                    ->sortable(),

                Tables\Columns\TextColumn::make('unemployment_rate')
                    ->label('Tingkat Pengangguran')
                    ->numeric(
                        decimalPlaces: 2,
                        decimalSeparator: ',',
                        thousandsSeparator: '.'
                    )
                    ->suffix('%')
                    ->sortable(),

                Tables\Columns\TextColumn::make('parks')
                    ->label('Jumlah Taman')
                    ->numeric()
                    ->sortable(),

                Tables\Columns\TextColumn::make('schools')
                    ->label('Jumlah Sekolah')
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
                Tables\Filters\SelectFilter::make('regency_id')
                    ->relationship('regency', 'name')
                    ->searchable()
                    ->preload()
                    ->label('Filter Kabupaten/Kota')
                    ->multiple(),

                Tables\Filters\SelectFilter::make('province')
                    ->relationship('regency.province', 'name')
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
            'index' => Pages\ListTematikData::route('/'),
            'create' => Pages\CreateTematikData::route('/create'),
            'edit' => Pages\EditTematikData::route('/{record}/edit'),
        ];
    }
}
