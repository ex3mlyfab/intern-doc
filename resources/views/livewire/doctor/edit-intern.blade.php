<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Intern') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-200 mb-2 overflow-hidden shadow-xl sm:rounded-lg">
    <form wire:submit="save">
        {{ $this->form }}

        <div class="flex py-2 justify-center align-items-center">
            <x-button type="submit" class="w--5xl self-center" >
                <x-filament::loading-indicator class="h-5 w-5" /> Submit
            </x-button>
        </div>
    </form>

    <x-filament-actions::modals />
</div>
</div>
</div>
</div>
