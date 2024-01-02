<div>
    <x-slot name="headTitle">
        Intern Doctor
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          Evaluate Dr. {{$this->record->fullname}} Information
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{ $this->internInfolist }}
                <div class="px-4 py-3 bg-gray-100 rounded-lg">
                    <div class="font-medium text-lg mb-5">Parameters</div>
                    <section class="container px-4 mx-auto">
                        <div class="flex flex-col">
                            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                                    <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                            <thead class="bg-gray-50 dark:bg-gray-800">
                                                <tr>
                                                    <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                        <div class="flex items-center gap-x-3">


                                                            <span>Pramaters</span>


                                                        </div>
                                                    </th>

                                                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                       A
                                                    </th>

                                                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                        B
                                                    </th>

                                                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                        C
                                                    </th>

                                                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                        D
                                                    </th>
                                                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                        E
                                                    </th>
                                                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                        F
                                                    </th>


                                                </tr>
                                            </thead>
                                            <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="inline-flex items-center justify-start gap-x-3">


                                                            <span>1. Knowledge and Application of Basic Medical Sciences</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="6" /> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="5" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="4" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="3" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="2" />

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="1" />

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="inline-flex items-center justify-start gap-x-3">


                                                            <span>2. Knowledge and Application of Clinical Sciences</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="6" /> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="5" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="4" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="3" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="2" />

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="1" />

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="inline-flex items-center justify-start gap-x-3">


                                                            <span>3. Knowledge of Pathological Basis of Medical Practices</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="6" /> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="5" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="4" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="3" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="2" />

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="1" />

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="inline-flex items-center justify-start gap-x-3">


                                                            <span>4. Level of Clinical Competence</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="6" /> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="5" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="4" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="3" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="2" />

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="1" />

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="inline-flex items-center justify-end gap-x-3">


                                                            <span>i. Medical Records - History Taking</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="6" /> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="5" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="4" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="3" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="2" />

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="1" />

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="inline-flex items-center justify-end gap-x-3">


                                                            <span> - Admission Work</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="6" /> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="5" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="4" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="3" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="2" />

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="1" />

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="inline-flex items-center justify-end gap-x-3">


                                                            <span> - Progress Notes</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="6" /> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="5" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="4" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="3" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="2" />

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="1" />

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="inline-flex items-center justify-end gap-x-3">


                                                            <span> - Case Summaries</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="6" /> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="5" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="4" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="3" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="2" />

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="1" />

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="inline-flex items-center justify-center gap-x-3">


                                                            <span>ii. Diagnostics Acumen</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="6" /> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="5" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="4" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="3" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="2" />

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="1" />

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="inline-flex items-center justify-center gap-x-3">


                                                            <span>iii. Knowledge and Application of Therapeutics</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="6" /> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="5" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="4" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="3" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="2" />

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="1" />

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="inline-flex items-center justify-center gap-x-3">


                                                            <span>iv. Interaction with other members of the health team</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="6" /> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="5" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="4" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="3" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="2" />

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="1" />

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="inline-flex items-center justify-center gap-x-3">


                                                            <span>v. Compliance with Professional Ethics </span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="6" /> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="5" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="4" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="3" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="2" />

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="1" />

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-bold text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="inline-flex items-center justify-start gap-x-3">


                                                            <span>5. Motivation and Trainability </span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="6" /> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="5" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="4" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="3" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="2" />

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="1" />

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="inline-flex items-center justify-center gap-x-3">


                                                            <span>i. Appropriate response to criticism</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="6" /> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="5" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="4" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="3" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="2" />

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="1" />

                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="inline-flex items-center justify-center gap-x-3">


                                                            <span>ii. Ability to use the library</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="6" /> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="5" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="4" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="3" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="2" />

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="1" />

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="inline-flex items-center justify-center gap-x-3">


                                                            <span>iii. Ability to present cases during round</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="6" /> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="5" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="4" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="3" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="2" />

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="1" />

                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="inline-flex items-center justify-center gap-x-3">


                                                            <span>iv. Ability to learn and apply clinical skills</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="6" /> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="5" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="4" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="3" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="2" />

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="1" />

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="inline-flex items-center justify-center gap-x-3">


                                                            <span>v. Appropriate use of diagnostic facilities</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="6" /> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="5" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="4" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="3" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="2" />

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="1" />

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="inline-flex items-center justify-end gap-x-3">


                                                            <span>(a) Side Laboratories</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="6" /> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="5" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="4" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="3" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="2" />

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="1" />

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="inline-flex items-center justify-end gap-x-3">


                                                            <span>(b) Laboratory Requests</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="6" /> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="5" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="4" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="3" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="2" />

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="1" />

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="inline-flex items-center justify-end gap-x-3">


                                                            <span>(c) Radiology Requests</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="6" /> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="5" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="4" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="3" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="2" />

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="1" />

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="inline-flex items-center justify-end gap-x-3">


                                                            <span>(d) Follow -up of Requests</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="6" /> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="5" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="4" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="3" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="2" />

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="1" />

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="inline-flex items-center justify-between gap-x-3">


                                                            <span>iv. General Behaviour </span>
                                                            <span>(a) Punctuality </span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="6" /> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="5" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="4" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="3" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="2" />

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="1" />

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="inline-flex items-center justify-end gap-x-3">


                                                            <span>(b) Availability</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="6" /> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="5" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="4" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="3" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="2" />

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="1" />

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="inline-flex items-center justify-end gap-x-3">


                                                            <span>(c) Endurance</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="6" /> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="5" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="4" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="3" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="2" />

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="1" />

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="inline-flex items-center justify-end gap-x-3">


                                                            <span>(d) Personal Comportment</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="6" /> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="5" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="4" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="3" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="2" />

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="1" />

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="inline-flex items-center justify-end gap-x-3">


                                                            <span>(e) Neatness and Appropriate Attire</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="6" /> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="5" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="4" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="3" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="2" />

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="1" />

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="inline-flex items-center justify-end gap-x-3">


                                                            <span>(f) Sense of Responsibility</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="6" /> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="5" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="4" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="3" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="2" />

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="1" />

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="inline-flex items-center justify-end gap-x-3">


                                                            <span>(g) InterPersonal Relationship</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="6" /> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="5" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="4" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="3" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="2" />

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="1" />

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="inline-flex items-center justify-end gap-x-3">


                                                            <span>(h) Relationship with Hospital Authorities</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="6" /> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="5" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="4" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="3" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="2" />

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="1" />

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-sbold text-gray-900 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="inline-flex items-center justify-Start gap-x-3">


                                                            <span>OVERALL eVALUATION SCORE</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="6" /> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="5" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="4" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="3" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="2" />

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="permissions"  value="1" />

                                                    </td>
                                                </tr>

                                           </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center justify-between mt-6">
                            <a href="#" class="flex items-center px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md gap-x-2 hover:bg-gray-100 dark:bg-gray-900 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                                </svg>

                                <span>
                                    previous
                                </span>
                            </a>

                            <div class="items-center hidden md:flex gap-x-3">
                                <a href="#" class="px-2 py-1 text-sm text-blue-500 rounded-md dark:bg-gray-800 bg-blue-100/60">1</a>
                                <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">2</a>
                                <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">3</a>
                                <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">...</a>
                                <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">12</a>
                                <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">13</a>
                                <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">14</a>
                            </div>

                            <a href="#" class="flex items-center px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md gap-x-2 hover:bg-gray-100 dark:bg-gray-900 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800">
                                <span>
                                    Next
                                </span>

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                </svg>
                            </a>
                        </div>
                    </section>


                </div>
                <x-filament-actions::modals />
            </div>
        </div>
    </div>

</div>
