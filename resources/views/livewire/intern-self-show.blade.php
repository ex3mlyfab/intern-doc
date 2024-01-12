<div>
    <x-slot name="headTitle">
        
    </x-slot>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
           Dr. {{$record->fullname}} Information
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                {{ $this->internInfolist }}
                <div class="px-4 py-3 bg-gray-100 rounded-lg">
                {{$this->table}}
                </div>
                <x-filament-actions::modals />
            </div>
        </div>
    </div>

</div>
