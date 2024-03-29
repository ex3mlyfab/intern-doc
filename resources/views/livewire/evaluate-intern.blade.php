<div>
    <x-slot name="headTitle">
        Intern Doctor Evaluation
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          Evaluate Dr. {{$this->record->fullname}} Information
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-xl sm:rounded-lg">
                {{ $this->infolist }}
                <form wire:submit="store">
                    @csrf
                <div class="px-4 py-3 overflow-x-auto bg-gray-100 rounded-lg">

                        <div class="flex flex-col items-center">
                            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                                    <div class="w-full border border-gray-200 dark:border-gray-900 md:rounded-lg">
                                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-900">
                                            <thead class="bg-gray-50 dark:bg-gray-800 sticky" >
                                                <tr>
                                                    <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                        <div class="flex items-center gap-x-3">


                                                            <span>Paramaters</span>


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
                                            <tbody class="bg-white divide-y divide-x divide-gray-200 dark:divide-gray-900 dark:bg-gray-900">
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 dark:text-gray-200 whitespace-normal">
                                                        <div class="flex items-center justify-start gap-x-3">


                                                            <span>1. Knowledge and Application of Basic Medical Sciences</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="kabms"  value="6" required="true"/> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="kabms"  value="5" required="true" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="kabms"  value="4" required="true" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="kabms"  value="3" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="kabms"  value="2" required="true"/>

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="kabms"  value="1" required="true"/>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="flex items-center justify-start gap-x-3">


                                                            <span>2. Knowledge and Application of Clinical Sciences</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="kaacs"  value="6" required="true" /> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="kaacs"  value="5" required="true" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="kaacs"  value="4" required="true" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="kaacs"  value="3" required="true" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="kaacs"  value="2" required="true" />

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="kaacs"  value="1" required="true" />

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="flex items-center justify-start gap-x-3">


                                                            <span>3. Knowledge of Pathological Basis of Medical Practices</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="kpbms"  value="6" required="true" /> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="kpbms"  value="5" required="true" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="kpbms"  value="4" required="true" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="kpbms"  value="3" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="kpbms"  value="2" required="true"/>

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="kpbms"  value="1" required="true"/>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="flex items-center justify-start gap-x-3">


                                                            <span>4. Level of Clinical Competence</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="locc"  value="6"  required="true"/> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="locc"  value="5" required="true" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="locc"  value="4" required="true" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="locc"  value="3" required="true" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="locc"  value="2" required="true" />

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="locc"  value="1"  required="true"/>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="flex items-center justify-end gap-x-3">


                                                            <span>i. Medical Records - History Taking</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="mr_ht"  value="6" required="true"/> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="mr_ht"  value="5" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="mr_ht"  value="4" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="mr_ht"  value="3" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="mr_ht"  value="2" required="true"/>

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="mr_ht"  value="1" required="true"/>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="flex items-center justify-end gap-x-3">


                                                            <span> - Admission Work</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="mr_aw"  value="6"  required="true"/> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="mr_aw"  value="5" required="true" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="mr_aw"  value="4"  required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="mr_aw"  value="3"  required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="mr_aw"  value="2" required="true" />

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="mr_aw"  value="1"  required="true"/>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="flex items-center justify-end gap-x-3">


                                                            <span> - Progress Notes</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="mr_pn"  value="6" required="true"/> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="mr_pn"  value="5" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="mr_pn"  value="4" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="mr_pn"  value="3" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="mr_pn"  value="2" required="true"/>

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="mr_pn"  value="1" required="true"/>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="flex items-center justify-end gap-x-3">


                                                            <span> - Case Summaries</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="mr_cs"  value="6" required="true"/> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="mr_cs"  value="5" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="mr_cs"  value="4" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="mr_cs"  value="3" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="mr_cs"  value="2" required="true"/>

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="mr_cs"  value="1" required="true"/>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="flex items-center justify-center gap-x-3">


                                                            <span>ii. Diagnostics Acumen</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="diagnostic_acumen"  value="6" required="true" /> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="diagnostic_acumen"  value="5" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="diagnostic_acumen"  value="4" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="diagnostic_acumen"  value="3" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="diagnostic_acumen"  value="2" required="true"/>

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="diagnostic_acumen"  value="1" required="true"/>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="flex items-center justify-center gap-x-3">


                                                            <span>iii. Knowledge and Application of Therapeutics</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="kaat"  value="6" required="true"/> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="kaat"  value="5" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="kaat"  value="4" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="kaat"  value="3" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="kaat"  value="2" required="true"/>

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="kaat"  value="1" required="true"/>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="flex items-center justify-center gap-x-3">


                                                            <span>iv. Interaction with other members of the health team</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="iwomoht"  value="6" required="true"/> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="iwomoht"  value="5" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="iwomoht"  value="4" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="iwomoht"  value="3" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="iwomoht"  value="2" required="true"/>

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="iwomoht"  value="1" required="true"/>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="flex items-center justify-center gap-x-3">


                                                            <span>v. Compliance with Professional Ethics </span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="cwpe"  value="6" required="true"/> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="cwpe"  value="5" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="cwpe"  value="4" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="cwpe"  value="3" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="cwpe"  value="2" required="true"/>

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="cwpe"  value="1" required="true"/>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-bold text-gray-900 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="flex items-center justify-start gap-x-3">


                                                            <span>5. Motivation and Trainability </span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="mat"  value="6" required="true"/> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="mat"  value="5" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="mat"  value="4" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="mat"  value="3" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="mat"  value="2" required="true"/>

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="mat"  value="1" required="true"/>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="flex items-center justify-center gap-x-3">


                                                            <span>i. Appropriate response to criticism</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="artc"  value="6" required="true"/> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="artc"  value="5" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="artc"  value="4" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="artc"  value="3" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="artc"  value="2" required="true"/>

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="artc"  value="1" required="true"/>

                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="flex items-center justify-center gap-x-3">


                                                            <span>ii. Ability to use the library</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="atutl"  value="6" required="true"/> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="atutl"  value="5" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="atutl"  value="4" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="atutl"  value="3" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="atutl"  value="2" required="true"/>

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="atutl"  value="1" required="true"/>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="flex items-center justify-center gap-x-3">


                                                            <span>iii. Ability to present cases during round</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="atpcdr"  value="6" required="true"/> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="atpcdr"  value="5" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="atpcdr"  value="4" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="atpcdr"  value="3" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="atpcdr"  value="2" required="true"/>

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="atpcdr"  value="1" required="true"/>

                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="flex items-center justify-center gap-x-3">


                                                            <span>iv. Ability to learn and apply clinical skills</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="atlaacs"  value="6" required="true"/> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="atlaacs"  value="5" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="atlaacs"  value="4" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="atlaacs"  value="3" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="atlaacs"  value="2" required="true"/>

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="atlaacs"  value="1" required="true"/>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="flex items-center justify-center gap-x-3">


                                                            <span>v. Appropriate use of diagnostic facilities</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="auodf"  value="6" required="true"/> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="auodf"  value="5" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="auodf"  value="4" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="auodf"  value="3" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="auodf"  value="2" required="true"/>

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="auodf"  value="1" required="true"/>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="flex items-center justify-end gap-x-3">


                                                            <span>(a) Side Laboratories</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="side_laboratories"  value="6"  required="true"/> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="side_laboratories"  value="5"  required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="side_laboratories"  value="4"  required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="side_laboratories"  value="3"  required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="side_laboratories"  value="2"  required="true"/>

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="side_laboratories"  value="1" required="true" />

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 dark:text-gray-200 whitespace-normal">
                                                        <div class="flex items-center justify-end gap-x-3">


                                                            <span>(b) Laboratory Requests</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="laboratory_request"  value="6" required="true"/> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="laboratory_request"  value="5" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="laboratory_request"  value="4" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="laboratory_request"  value="3" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="laboratory_request"  value="2" required="true"/>

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="laboratory_request"  value="1" required="true"/>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="flex items-center justify-end gap-x-3">


                                                            <span>(c) Radiology Requests</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="radiology_request"  value="6" required="true"/> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="radiology_request"  value="5" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="radiology_request"  value="4" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="radiology_request"  value="3" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="radiology_request"  value="2" required="true"/>

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="radiology_request"  value="1" required="true"/>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="flex items-center justify-end gap-x-3">


                                                            <span>(d) Follow -up of Requests</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="follow_up_of_results"  value="6" required="true"/> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="follow_up_of_results"  value="5" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="follow_up_of_results"  value="4" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="follow_up_of_results"  value="3" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="follow_up_of_results"  value="2" required="true"/>

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="follow_up_of_results"  value="1" required="true"/>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="flex items-center justify-between gap-x-3">


                                                            <span>iv. General Behaviour </span>
                                                            <span>(a) Punctuality </span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="punctuality"  value="6" required="true"/> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="punctuality"  value="5" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="punctuality"  value="4" required="true" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="punctuality"  value="3" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="punctuality"  value="2" required="true" />

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="punctuality"  value="1" required="true" />

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="flex items-center justify-end gap-x-3">


                                                            <span>(b) Availability</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="availability"  value="6" required="true"/> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="availability"  value="5" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="availability"  value="4" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="availability"  value="3" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="availability"  value="2" required="true"/>

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="availability"  value="1" required="true"/>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="flex items-center justify-end gap-x-3">


                                                            <span>(c) Endurance</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="endurance"  value="6" required="true"/> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="endurance"  value="5" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="endurance"  value="4" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="endurance"  value="3" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="endurance"  value="2" required="true"/>

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="endurance"  value="1" required="true"/>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="flex items-center justify-end gap-x-3">


                                                            <span>(d) Personal Comportment</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="personal_comportment"  value="6" required="true"/> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="personal_comportment"  value="5" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="personal_comportment"  value="4" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="personal_comportment"  value="3" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="personal_comportment"  value="2" required="true"/>

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="personal_comportment"  value="1" required="true"/>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="flex items-center justify-end gap-x-3">


                                                            <span>(e) Neatness and Appropriate Attire</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="neatness"  value="6" required="true"/> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="neatness"  value="5" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="neatness"  value="4" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="neatness"  value="3" required="true"/>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="neatness"  value="2" required="true"/>

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="neatness"  value="1" required="true"/>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="flex items-center justify-end gap-x-3">


                                                            <span>(f) Sense of Responsibility</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="sense_of_responsibility"  value="6" required="true" /> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="sense_of_responsibility"  value="5" required="true" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="sense_of_responsibility"  value="4" required="true" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="sense_of_responsibility"  value="3" required="true" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="sense_of_responsibility"  value="2" required="true" />

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="sense_of_responsibility"  value="1" required="true" />

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="flex items-center justify-end gap-x-3">


                                                            <span>(g) InterPersonal Relationship</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="interpersonal"  value="6" /> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="interpersonal"  value="5" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="interpersonal"  value="4" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="interpersonal"  value="3" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="interpersonal"  value="2" />

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="interpersonal"  value="1" />

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="flex items-center justify-end gap-x-3">


                                                            <span>(h) Relationship with Hospital Authorities</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="rwha"  value="6" /> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="rwha"  value="5" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="rwha"  value="4" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="rwha"  value="3" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="rwha"  value="2" />

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="rwha"  value="1" />

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-sbold text-gray-900 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="flex items-center justify-Start gap-x-3">


                                                            <span>OVERALL EVALUATION SCORE</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="overall_evaluation"  value="6" /> </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="overall_evaluation"  value="5" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="overall_evaluation"  value="4" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="overall_evaluation"  value="3" />
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="overall_evaluation"  value="2" />

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <x-input class="block m-2 focus:border-blue-500"  type="radio"
                                                        wire:model="overall_evaluation"  value="1" />

                                                    </td>
                                                </tr>

                                           </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="w-full px-8 py-3">
                    <label for="comment" class="block text-sm font-medium leading-6 text-gray-900">General Comments (including what you think he/she has acquired in the course of his/her internship with you) </label>
                    <div class="mt-2">
                    <textarea rows="4" wire:model="general_comments" id="comment" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required></textarea>
                    </div>
                </div>
                <div class="w-full px-8 py-3" x-data="{ comment_show: false }">
                    <x-label>Do you consider him/her a fit and proper person to be entered on the full register of the Medical and Dental Councill of Nigeria</x-label>
                    <div class="px-12 flex items-center justify-around gap-5 mb-6">
                        <div class="flex items-center justify-center gap-3">
                            <x-label for="suitable" value="Yes" />
                                <x-input class="block focus:border-green-500" id="suitable" type="radio"
                                    wire:model="is_fit"  value="1" x-on:change="
                                    comment_show = false;
                                    "/>
                        </div>
                        <div class="flex items-center justify-center gap-3">
                            <x-label for="suitable-no"  value="No" />
                                <x-input class="block focus:border-blue-500" id="suitable-no" type="radio"
                                    wire:model="is_fit"  value="0" x-on:change="
                                    comment_show = true;
                                    "/>
                        </div>

                    </div>
                    <div x-show="comment_show">
                    <label for="if_is_fit_is_no_comment" class="block text-sm font-medium leading-6 text-gray-900">If No, give reasons and make further recommendations</label>
                    <div class="mt-2">
                        <textarea rows="4" wire:model="if_is_fit_is_no_comment" id="if_is_fit_is_no_comment" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                    </div>
                </div>
                </div>
                <div x-data="{submitting:false }" class="flex py-2 justify-center align-items-center">
                    <x-button type="submit" class="w--5xl self-center" >
                        @if ($submitting)
                            <x-filament::loading-indicator class="h-5 w-5" />
                        @endif
                        Submit
                    </x-button>
                </form>
            </div>
        </div>
    </div>

</div>
