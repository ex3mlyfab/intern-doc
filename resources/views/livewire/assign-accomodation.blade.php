<div>
        <form wire:submit="create" class="w-full">
            {{ $this->form }}

            <div class="flex py-2 justify-center align-items-center">
            <x-button type="submit" class="w--5xl self-center" >

                    <x-filament::loading-indicator class="h-5 w-5"  wire:loading/>
                Submit
            </x-button>
        </div>
        </form>

        <x-filament-actions::modals />
</div>
