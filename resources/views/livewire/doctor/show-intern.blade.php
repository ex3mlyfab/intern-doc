<div>
    <x-slot name="headTitle">
        Intern Doctor
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Dr. {{$this->record->fullname}} Information
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 px-4 py-2">
                    <div class="col-span-2">
                        {{ $this->internInfolist }}
                    </div>

                    <div>
                        @if (!$record->assignAccomodation()->exists())
                            @livewire('assign-accomodation')
                        @endif

                    </div>
                </div>

                <div class="px-4 py-3 bg-gray-100 rounded-lg">
                {{$this->table}}
                </div>
                <x-filament-actions::modals />
            </div>
        </div>
    </div>

</div>
