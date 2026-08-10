<?php

namespace App\Filament\Pages;

use App\Models\SiteSetting;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Notifications\Notification;
use Filament\Pages\Page;

class ContactSettings extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-phone';
    protected static ?string $navigationLabel = 'Pengaturan Kontak';
    protected static ?string $title = 'Pengaturan Kontak';
    protected static ?string $slug = 'contact-settings';
    protected static ?string $navigationGroup = 'Manajemen Konten';
    protected static ?int $navigationSort = 99;

    protected static string $view = 'filament.pages.contact-settings';

    public ?array $data = [];

    public function mount(): void
    {
        $settings = SiteSetting::current();

        $this->form->fill([
            'email' => $settings->email,
            'whatsapp' => $settings->whatsapp,
            'whatsapp_display' => $settings->whatsapp_display,
            'address' => $settings->address,
            'maps_url' => $settings->maps_url,
        ]);
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('email')
                    ->label('Email')
                    ->email()
                    ->maxLength(255)
                    ->helperText('Email yang ditampilkan di halaman kontak publik'),
                TextInput::make('whatsapp')
                    ->label('Nomor WhatsApp (Internasional)')
                    ->placeholder('6285922107678')
                    ->maxLength(30)
                    ->helperText('Gunakan format internasional tanpa tanda + atau 0. Contoh: 6285922107678. Nomor ini dipakai untuk semua tombol WhatsApp di seluruh halaman.'),
                TextInput::make('whatsapp_display')
                    ->label('Nomor WhatsApp (Tampilan)')
                    ->placeholder('0859-2210-7678')
                    ->maxLength(30)
                    ->helperText('Format nomor yang ditampilkan di halaman publik'),
                TextInput::make('address')
                    ->label('Lokasi / Alamat')
                    ->placeholder('Makassar, Sulawesi Selatan, Indonesia')
                    ->maxLength(255),
                Textarea::make('maps_url')
                    ->label('URL Google Maps')
                    ->rows(3)
                    ->helperText('Tempel URL embed Google Maps untuk iframe di halaman kontak'),
            ])
            ->statePath('data')
            ->model(SiteSetting::current());
    }

    public function save(): void
    {
        $data = $this->form->getState();

        SiteSetting::current()->update($data);

        Notification::make()
            ->title('Pengaturan kontak berhasil disimpan')
            ->success()
            ->send();
    }
}
