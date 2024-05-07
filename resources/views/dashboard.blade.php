<x-app-layout>
    <x-slot name="headTitle">
        Dashboard
    </x-slot>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 lg:p-8">
                    <x-application-logo class="block w-auto h-48" />

                    <h1 class="mt-8 text-2xl font-medium text-gray-900">
                        Welcome to E-Monitoring App
                    </h1>
                    <div class="m-5">
                         @livewire('stats-overview')
                    </div>

                    {{-- <div class="p-5 border-2 border-blue-500 rounded-lg shadow-lg">
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
