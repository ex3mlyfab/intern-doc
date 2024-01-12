<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Role') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-200 mb-2 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="bg-canvas-500 p-2 shadow-md rounded">
                <form wire:submit="create">

                    <div>
                        <x-label for="name" value="{{ __('Role Name') }}" />
                        <x-input id="name" class="block mt-1 w-full" type="text" wire:model="role_name" required autofocus autocomplete="name" />
                    </div>
                    <div>
                        <x-label for="name" value="{{ __('Permissions') }}" class="border-b-gray-900 mb-2 w-full" />
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            @forelse ($stored_permissions as $item)
                                <div class="flex items-center justify-center gap-3">
                                    <x-label for="{{ $item->id }}" wire:key="{{$item->id}}" value="{{ $item->name }}" />
                                        <x-input class="block focus:border-blue-500" id="{{ $item->id }}" type="checkbox"
                                            wire:model="permissions" wire:key="{{$item->id}}" value="{{$item->id}}" />
                                </div>

                            @empty

                            @endforelse

                        </div>
                    </div>
                    <div class="flex py-2 justify-center items-center">
                        <x-button type="submit" class="w--5xl self-center" >
                            @if ($submitting)
                            <x-filament::loading-indicator class="h-5 w-5" />
                            @endif
                            Submit
                        </x-button>
                    </div>
                </form>
            </div>


            </div>
        </div>
    </div>
</div>
