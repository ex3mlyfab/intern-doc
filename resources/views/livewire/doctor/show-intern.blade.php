<div>
    <x-slot name="headTitle">
        Intern Doctor
    </x-slot>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
           Dr. {{$this->record->fullname}} Information
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <div class="grid grid-cols-1 gap-4 px-4 py-2 md:grid-cols-3">
                    <div class="col-span-2">
                        {{ $this->internInfolist }}
                    </div>

                    <div>
                        @if (!$record->assignAccomodation()->exists())
                            <livewire:assign-accomodation :internDoctor="$record->id">
                            {{-- @livewire('assign-accomodation', ['internDoctor' => $record->id]) --}}
                        @else

                            @livewire('accomodation-charges', ['internDoctor' => $record->id,
                            'assignedDate' => $record->assignAccomodation->assigment_date,
                            'room_id' => $record->assignAccomodation->id,
                            'room_no' => $record->assignAccomodation->accomodation->fullname])
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
