<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TestimonialResource\Pages;
use App\Models\Testimonial;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class TestimonialResource extends Resource
{
    protected static ?string $model = Testimonial::class;
    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-right';
    protected static ?string $navigationGroup = 'Manajemen Konten';
    protected static ?string $label = 'Testimoni';
    protected static ?string $pluralLabel = 'Testimoni';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('client_name')
                    ->label('Nama Klien')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('business_name')
                    ->label('Nama Bisnis')
                    ->maxLength(255),
                Forms\Components\TextInput::make('photo_url')
                    ->label('URL Foto')
                    ->url()
                    ->maxLength(255)
                    ->helperText('Masukkan URL foto klien'),
                Forms\Components\Textarea::make('quote')
                    ->label('Testimoni')
                    ->required()
                    ->rows(4),
                Forms\Components\Select::make('rating')
                    ->label('Rating')
                    ->options([
                        1 => '⭐ 1',
                        2 => '⭐⭐ 2',
                        3 => '⭐⭐⭐ 3',
                        4 => '⭐⭐⭐⭐ 4',
                        5 => '⭐⭐⭐⭐⭐ 5',
                    ])
                    ->default(5),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('photo_url')
                    ->label('Foto')
                    ->circular()
                    ->size(40),
                Tables\Columns\TextColumn::make('client_name')
                    ->label('Nama Klien')
                    ->searchable()
                    ->weight('bold'),
                Tables\Columns\TextColumn::make('business_name')
                    ->label('Bisnis'),
                Tables\Columns\TextColumn::make('quote')
                    ->label('Testimoni')
                    ->limit(50),
                Tables\Columns\IconColumn::make('rating')
                    ->label('Rating')
                    ->getStateUsing(fn ($record) => str_repeat('⭐', $record->rating ?? 0)),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d M Y')
                    ->sortable(),
            ])
            ->filters([])
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
            'index' => Pages\ListTestimonials::route('/'),
            'create' => Pages\CreateTestimonial::route('/create'),
            'edit' => Pages\EditTestimonial::route('/{record}/edit'),
        ];
    }
}