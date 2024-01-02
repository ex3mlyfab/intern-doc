<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create User') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-200 mb-2 overflow-hidden shadow-xl sm:rounded-lg">
                <form wire:submit="create">
                    {{ $this->form }}

                    <div class="flex py-2 justify-center align-items-center">
                        <x-button class="ms-4">
                            {{ __('Create User') }}
                        </x-button>
                </div>
                </form>

                <x-filament-actions::modals />
            </div>
        </div>
    </div>
</div>
