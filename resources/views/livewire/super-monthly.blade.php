<div>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Mark Attendance for the Month of ' . date('M-Y')) }}
        </h2>
    </x-slot>

    <div class="py-12">
        {{-- @if (auth()->user()->latestPostingRecord)

        @endif --}}
        <form wire:submit='store'>
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white border-2 border-green-500 shadow-xl sm:rounded-lg">
                    <div class="flex flex-col items-center">
                        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-3 lg:-mx-4">
                            <div class="inline-block min-w-full py-2 align-middle md:px-4 lg:px-6">
                                <div class="w-full border border-gray-50 dark:border-gray-900 md:rounded-lg">
                                    <table
                                        class="min-w-full mb-4 border border-collapse divide-y divide-gray-200 border-slate-400 dark:divide-gray-900">
                                        <thead class="bg-gray-50 dark:bg-gray-800">
                                            <tr>
                                                <th scope="col"
                                                    class="border border-slate-300 py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                    <div class="flex flex-col items-center mb-4">
                                                        <label for="default-checkbox" class="text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">Clear all</label>
                                                        <input id="default-checkbox" type="checkbox" wire:model='selectAll' wire:click='selectallClick' class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">

                                                    </div>
                                                </th>
                                                <th scope="col"
                                                    class="border border-slate-300 py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                    <span>Full Name</span>
                                                </th>
                                                <th scope="col"
                                                    class="border border-slate-300 py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                    <span>Designation</span>
                                                </th>
                                                <th scope="col"
                                                    class="border border-slate-300 py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                    <span>Report Period</span>
                                                </th>
                                                <th scope="col"
                                                    class="border border-slate-300 py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                    <span>Comment</span>
                                                </th>

                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-900 dark:bg-gray-900">
                                            @foreach ($doctors as $item)
                                                <tr>
                                                    <td class="border border-slate-300 py-3.5 px-4 text-sm font-normalrtl:text-right text-gray-500 dark:text-gray-400">
                                                        <div class="items-center justify-center">
                                                            <input id="default-checkbox{{ $item->id }}" wire:model='clearedLocums' wire:click='rowSelect({{ $item->id }})' wire:key='clearedLocums.{{ $item->id }}' value="{{ $item->id }}" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                        </div>

                                                    </td>
                                                    <td class="border border-slate-300 py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                        <span class="font-medium text-md">{{ $item->name }}</span>
                                                    </td>
                                                    <td class="border border-slate-300 py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                        <span class="text-md">{{ $item->designation }}</span>
                                                    </td>
                                                    <td class="border border-slate-300 py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                        <span class="text-md">{{ today()->format('M-Y') }}</span>
                                                    </td>
                                                    <td class="border border-slate-300 py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                        <x-input id="comments.{{$item->id}}" class="block w-full mt-1" type="text" wire:key='comments.{{ $item->id }}'  required wire:model="locumComments.{{$item->id}}" />
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="flex justify-center py-2 align-items-center">
                                        <x-button type="submit" class="self-center w--5xl" >

                                                <x-filament::loading-indicator class="w-5 h-5"  wire:loading/>
                                            Submit
                                        </x-button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>

</div>
