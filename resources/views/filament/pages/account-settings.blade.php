<x-filament-panels::page>
    <x-filament-panels::form id="form" wire:submit="save">
        {{ $this->form }}

        <div class="fi-form-actions">
            <x-filament::button type="submit" wire:loading.attr="disabled" wire:target="save">
                Simpan
            </x-filament::button>
        </div>
    </x-filament-panels::form>
</x-filament-panels::page>
