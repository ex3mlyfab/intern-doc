<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Monthly Attendance Report') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h2 class="text-2xl underline font-semibold mb-6 text-center">Select Attendance Report :</h2>


                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-9 py-3 shadow-md my-3">

                    <form wire:submit="create">
                        {{ $this->form }}

                        <div class="flex py-2 justify-center align-items-center">
                        <x-button type="submit" class="w--5xl self-center" >

                                <x-filament::loading-indicator class="h-5 w-5" wire:loading/>
                            Submit
                        </x-button>
                    </div>
                    </form>

                    <x-filament-actions::modals />

                </div>


                @livewire('monthly-super-report', ['report_month' => $selectedMonth])

            </div>
        </div>
    </div>

</div>
