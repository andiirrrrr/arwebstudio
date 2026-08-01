<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Models\Project;
use App\Models\Service;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ImageColumn;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;
    protected static ?string $navigationIcon = 'heroicon-o-folder-open';
    protected static ?string $navigationGroup = 'Manajemen Konten';
    protected static ?string $label = 'Project';
    protected static ?string $pluralLabel = 'Portofolio';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Informasi Dasar')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('Judul Project')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('client_name')
                            ->label('Nama Klien')
                            ->maxLength(255),
                        
                        // ===== INI DIUBAH MENJADI DROPDOWN =====
                        Forms\Components\Select::make('category')
                            ->label('Kategori')
                            ->required()
                            ->options(function () {
                                return Service::pluck('name', 'name')->toArray();
                            })
                            ->searchable()
                            ->preload()
                            ->helperText('Pilih kategori layanan yang sesuai dengan project ini'),
                        
                        Forms\Components\TextInput::make('project_url')
                            ->label('URL Project (Live)')
                            ->url()
                            ->maxLength(255),
                        
                        Forms\Components\FileUpload::make('thumbnail_url')
                            ->label('Thumbnail')
                            ->image()
                            ->imageEditor()
                            ->imageResizeTargetWidth(1200)
                            ->imageResizeTargetHeight(800)
                            ->disk('public')
                            ->directory('projects')
                            ->visibility('public')
                            ->required()
                            ->helperText('Upload gambar thumbnail project (format: JPG, PNG, WEBP)'),
                    ])->columns(2),

                Forms\Components\Section::make('Deskripsi & Detail')
                    ->schema([
                        Forms\Components\Textarea::make('description')
                            ->label('Deskripsi Singkat')
                            ->rows(3),
                        Forms\Components\Textarea::make('problem')
                            ->label('Masalah (Problem)')
                            ->rows(3)
                            ->helperText('Apa masalah yang dihadapi klien sebelum menggunakan jasa Anda?'),
                        Forms\Components\Textarea::make('solution')
                            ->label('Solusi (Solution)')
                            ->rows(3)
                            ->helperText('Apa solusi yang Anda berikan?'),
                        Forms\Components\Textarea::make('result')
                            ->label('Hasil (Result)')
                            ->rows(3)
                            ->helperText('Apa hasil yang dicapai setelah project selesai?'),
                    ]),
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
                    ->disk('public'),
                Tables\Columns\TextColumn::make('title')
                    ->label('Judul')
                    ->searchable()
                    ->weight('bold'),
                Tables\Columns\TextColumn::make('category')
                    ->label('Kategori')
                    ->badge()
                    ->color('info'),
                Tables\Columns\TextColumn::make('client_name')
                    ->label('Klien')
                    ->searchable(),
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}