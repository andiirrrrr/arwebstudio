<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Models\Service;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;
    protected static ?string $navigationIcon = 'heroicon-o-cog';
    protected static ?string $navigationGroup = 'Manajemen Konten';
    protected static ?string $label = 'Layanan';
    protected static ?string $pluralLabel = 'Layanan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // ===== INFORMASI DASAR =====
                Forms\Components\Section::make('Informasi Dasar')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Nama Layanan')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('category')
                            ->label('Kategori')
                            ->required()
                            ->maxLength(255)
                            ->helperText('Contoh: Landing Page, Company Profile, E-commerce, Custom Web App'),
                        Forms\Components\Textarea::make('description')
                            ->label('Deskripsi Singkat')
                            ->rows(3)
                            ->nullable(),
                        Forms\Components\TextInput::make('price_start')
                            ->label('Harga Mulai Dari')
                            ->placeholder('Rp 1.500.000')
                            ->maxLength(255)
                            ->nullable(),
                        FileUpload::make('thumbnail')
                            ->label('Thumbnail Layanan')
                            ->image()
                            ->imageEditor()
                            ->imageEditorAspectRatios([
                                '16:9',
                                '4:3',
                                '1:1',
                            ])
                            ->imageResizeTargetWidth(800)
                            ->imageResizeTargetHeight(600)
                            ->disk('public')
                            ->directory('services')
                            ->visibility('public')
                            ->maxSize(5120) // 5MB
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp', 'image/jpg'])
                            ->helperText('Upload gambar thumbnail (format: JPG, PNG, WEBP, maks 5MB)')
                            ->nullable()
                            ->columnSpanFull(),
                    ])->columns(2),

                // ===== DETAIL LAYANAN =====
                Forms\Components\Section::make('Detail Layanan')
                    ->schema([         
                        Forms\Components\Textarea::make('target_audience')
                            ->label('Cocok Untuk Siapa')
                            ->placeholder('Contoh: UMKM, Startup, Perusahaan Menengah, dll')
                            ->rows(3)
                            ->nullable()
                            ->columnSpanFull(),
                        
                        Forms\Components\Repeater::make('key_features')
                            ->label('Fitur Utama')
                            ->schema([
                                Forms\Components\TextInput::make('feature')
                                    ->label('Fitur')
                                    ->placeholder('Masukkan fitur...')
                                    ->required(),
                            ])
                            ->itemLabel(fn (array $state): ?string => $state['feature'] ?? null)
                            ->defaultItems(0)
                            ->addable()
                            ->deletable()
                            ->nullable()
                            ->columnSpan(1),
                        
                        Forms\Components\Repeater::make('workflow')
                            ->label('Alur Pengerjaan')
                            ->schema([
                                Forms\Components\TextInput::make('step')
                                    ->label('Langkah')
                                    ->placeholder('Masukkan langkah pengerjaan...')
                                    ->required(),
                            ])
                            ->itemLabel(fn (array $state): ?string => $state['step'] ?? null)
                            ->defaultItems(0)
                            ->addable()
                            ->deletable()
                            ->nullable()
                            ->columnSpan(1),
                    ])->columns(2)
                    ->collapsible(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('thumbnail_url')
                    ->label('Thumbnail')
                    ->square()
                    ->size(50)
                    ->defaultImageUrl('/images/default-service.png'),
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama Layanan')
                    ->searchable()
                    ->weight('bold'),
                Tables\Columns\TextColumn::make('category')
                    ->label('Kategori')
                    ->badge()
                    ->color('info'),
                Tables\Columns\TextColumn::make('starting_price')
                    ->label('Harga Mulai')
                    ->getStateUsing(fn ($record) => $record->formatted_starting_price),
                Tables\Columns\TextColumn::make('packages_count')
                    ->label('Jumlah Paket')
                    ->getStateUsing(fn ($record) => $record->packages_count . ' Paket'),
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
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}