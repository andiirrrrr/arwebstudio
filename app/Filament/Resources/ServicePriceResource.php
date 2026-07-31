<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServicePriceResource\Pages;
use App\Models\ServicePrice;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Repeater;

class ServicePriceResource extends Resource
{
    protected static ?string $model = ServicePrice::class;
    protected static ?string $navigationIcon = 'heroicon-o-currency-dollar';
    protected static ?string $navigationGroup = 'Manajemen Harga';
    protected static ?string $label = 'Harga Layanan';
    protected static ?string $pluralLabel = 'Harga Layanan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Informasi Harga')
                    ->schema([
                        Select::make('service_id')
                            ->label('Layanan')
                            ->relationship('service', 'name')
                            ->required()
                            ->searchable()
                            ->preload(),
                        Select::make('package_id')
                            ->label('Paket')
                            ->relationship('package', 'name')
                            ->required()
                            ->searchable()
                            ->preload(),
                        TextInput::make('price')
                            ->label('Harga')
                            ->required()
                            ->numeric()
                            ->prefix('Rp')
                            ->minValue(0)
                            ->step(1000)
                            ->placeholder('Contoh: 1500000')
                            ->helperText('Masukkan angka tanpa titik atau koma. Contoh: 1500000 = Rp 1.500.000'),
                        TextInput::make('estimated_days')
                            ->label('Estimasi Hari Pengerjaan')
                            ->numeric()
                            ->placeholder('Contoh: 7'),
                        TextInput::make('page_limit')
                            ->label('Batas Halaman')
                            ->numeric()
                            ->placeholder('Kosongkan jika tidak terbatas'),
                        TextInput::make('revision_limit')
                            ->label('Batas Revisi')
                            ->numeric()
                            ->placeholder('Kosongkan jika tidak terbatas'),
                        Toggle::make('hosting')
                            ->label('Termasuk Hosting'),
                        Toggle::make('domain')
                            ->label('Termasuk Domain'),
                        Toggle::make('is_featured')
                            ->label('Unggulan'),
                        Repeater::make('features')
                            ->label('Fitur Paket')
                            ->schema([
                        TextInput::make('feature')
                            ->label('Fitur')
                            ->placeholder('Masukkan fitur...')
                            ->required(),
                            ])
                            ->itemLabel(fn (array $state): ?string => $state['feature'] ?? null)
                            ->default([])
                            ->addable()
                            ->deletable()
                            ->nullable()
                            ->helperText('Tambahkan fitur-fitur yang termasuk dalam paket ini'),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('service.name')
                    ->label('Layanan')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('package.name')
                    ->label('Paket')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('price')
                    ->label('Harga')
                    ->formatStateUsing(fn ($state) => 'Rp ' . number_format($state, 0, ',', '.'))
                    ->sortable(),
                Tables\Columns\TextColumn::make('estimated_days')
                    ->label('Estimasi')
                    ->formatStateUsing(fn ($state) => $state ? $state . ' hari' : '-'),
                Tables\Columns\TextColumn::make('page_limit')
                    ->label('Halaman')
                    ->formatStateUsing(fn ($state) => $state ?? '∞'),
                Tables\Columns\IconColumn::make('hosting')
                    ->label('Hosting')
                    ->boolean(),
                Tables\Columns\IconColumn::make('domain')
                    ->label('Domain')
                    ->boolean(),
                Tables\Columns\IconColumn::make('is_featured')
                    ->label('Unggulan')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d M Y')
                    ->sortable(),
            ])
            ->defaultSort('service_id')
            ->filters([
                Tables\Filters\SelectFilter::make('package_id')
                    ->label('Filter Paket')
                    ->relationship('package', 'name'),
                Tables\Filters\SelectFilter::make('service_id')
                    ->label('Filter Layanan')
                    ->relationship('service', 'name'),
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListServicePrices::route('/'),
            'create' => Pages\CreateServicePrice::route('/create'),
            'edit' => Pages\EditServicePrice::route('/{record}/edit'),
        ];
    }
}