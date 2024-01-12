<div>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Edit Information') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="mb-2 overflow-hidden bg-gray-200 shadow-xl sm:rounded-lg">
    <form wire:submit="save">
        {{ $this->form }}

        <div class="flex justify-center py-2 align-items-center" x-data={submitting:false}>
            <x-button type="submit" class="self-center w--5xl"  x-on:click="
            submitting = true;
            ">
            <div x-show="submitting">
                <x-filament::loading-indicator class="w-5 h-5" />
            </div> Submit
            </x-button>
        </div>
    </form>

    <x-filament-actions::modals />
</div>
</div>
</div>
</div>
