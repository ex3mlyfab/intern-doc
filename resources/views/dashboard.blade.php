<x-app-layout>
    <x-slot name="headTitle">
        Dashboard
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                    <x-application-logo class="block h-48 w-auto" />

                    <h1 class="mt-8 text-2xl font-medium text-gray-900">
                        Welcome to E-intern!
                    </h1>
                    <div class="m-5">
                         @livewire('stats-overview')
                    </div>

                    {{-- <div class="border-2 border-blue-500 shadow-lg rounded-lg p-5">
                                {{Auth::user()->roles->first()}}
                        <ul>
                            @foreach (Auth::user()->roles as $item)
                                @foreach ($item->permissions as $doll)
                                <li>{{$doll->name}}</li>
                                @endforeach

                            @endforeach

                        </ul>
                    </div> --}}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
