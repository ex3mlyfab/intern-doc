<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('loud')}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{ $this->internInfolist }}
                <div class="px-4 py-3 bg-gray-100 rounded-lg">
                {{$this->table}}
                </div>
                <x-filament-actions::modals />
            </div>
        </div>
    </div>

</div>
