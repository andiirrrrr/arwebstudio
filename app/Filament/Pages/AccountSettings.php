<?php

namespace App\Filament\Pages;

use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Illuminate\Support\Facades\Auth;

class AccountSettings extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-user-circle';
    protected static ?string $navigationLabel = 'Akun Saya';
    protected static ?string $title = 'Pengaturan Akun';
    protected static ?string $slug = 'account-settings';
    protected static ?int $navigationSort = 100;

    protected static string $view = 'filament.pages.account-settings';

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill([
            'name' => auth()->user()->name,
            'email' => auth()->user()->email,
        ]);
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Username')
                    ->required()
                    ->maxLength(255)
                    ->autofocus(),
                TextInput::make('email')
                    ->label('Email')
                    ->email()
                    ->required()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true),
                TextInput::make('current_password')
                    ->label('Password Saat Ini')
                    ->password()
                    ->revealable()
                    ->required()
                    ->currentPassword(),
                TextInput::make('new_password')
                    ->label('Password Baru')
                    ->password()
                    ->revealable()
                    ->minLength(8)
                    ->confirmed()
                    ->dehydrated(fn ($state): bool => filled($state)),
                TextInput::make('new_password_confirmation')
                    ->label('Konfirmasi Password Baru')
                    ->password()
                    ->revealable()
                    ->dehydrated(false),
            ])
            ->statePath('data')
            ->model(auth()->user());
    }

    public function save(): void
    {
        $user = auth()->user();

        $data = $this->form->getState();

        $user->name = $data['name'];
        $user->email = $data['email'];

        if (filled($data['new_password'])) {
            $user->password = $data['new_password'];
        }

        $user->save();

        Notification::make()
            ->title('Akun berhasil diperbarui')
            ->success()
            ->send();
    }

    public static function shouldRegisterNavigation(): bool
    {
        return Auth::check();
    }
}
