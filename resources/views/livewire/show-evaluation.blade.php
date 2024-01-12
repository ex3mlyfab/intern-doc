<div>
    <x-slot name="headTitle">
        Intern Doctor Evaluation
    </x-slot>
    <x-slot name="header">
        <div class="flex items-center justify-between">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ $record->department->name}} Posting Evaluation
        </h2>
        <div class="flex flex-col gap-2">
            <div class="text-gray-800 text-md">Name of Supervising consultant</div>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{$record->performaceEvaluation->assessedBy->fullname}}
            </h2>
        </div>
        
    </div>
        
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="bg-white shadow-xl sm:rounded-lg">
                {{ $this->infolist }}
                
                 
                <div class="px-4 py-3 overflow-x-auto bg-gray-100 rounded-lg">

                        <div class="flex flex-col items-center">
                            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-3 lg:-mx-4">
                                <div class="inline-block min-w-full py-2 align-middle md:px-4 lg:px-6">
                                    <div class="w-full border border-gray-200 dark:border-gray-900 md:rounded-lg">
                                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-900">
                                            <thead class="sticky top-0 bg-gray-50 dark:bg-gray-800" >
                                                <tr>
                                                    <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                        <div class="flex items-center">


                                                            <span>Paramaters</span>


                                                        </div>
                                                    </th>

                                                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-gray-500 dark:text-gray-400">
                                                        A
                                                        <br>Excellent<br> (80% and above)
                                                     </th>
 
                                                     <th scope="col" class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-gray-500 dark:text-gray-400">
                                                         B
                                                         <br>Very Good<br> (70% - 79%)
                                                     </th>
 
                                                     <th scope="col" class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-gray-500 dark:text-gray-400">
                                                         C
                                                         <br>Good<br> (60% - 69%)
                                                     </th>
 
                                                     <th scope="col" class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-gray-500 dark:text-gray-400">
                                                         D
                                                         <br>Average<br> (50% - 59%)
                                                     </th>
                                                     <th scope="col" class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-gray-500 dark:text-gray-400">
                                                         E
                                                         <br>Below Average <br>(40% - 49%)
                                                     </th>
                                                     <th scope="col" class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-gray-500 dark:text-gray-400">
                                                         F
                                                         <br>Unsatisfacroy <br>(Below 40% )
                                                     </th>
                                                     
                                                     
                                                      


                                                </tr>
                                            </thead>
                                            <tbody class="bg-white divide-x divide-y divide-gray-200 dark:divide-gray-900 dark:bg-gray-900">
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-normal dark:text-gray-200">
                                                        <div class="flex items-center justify-start gap-x-3">


                                                            <span>1. Knowledge and Application of Basic Medical Sciences</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->kabms == 6)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg></div>
                                                         @endif
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->kabms == 5)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg></div>
                                                         @endif
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->kabms == 4)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg></div>
                                                         @endif
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->kabms == 3)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg></div>
                                                         @endif
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->kabms == 2)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg></div>
                                                         @endif

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->kabms == 1)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg></div>
                                                         @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="flex items-center justify-start gap-x-3">


                                                            <span>2. Knowledge and Application of Clinical Sciences</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->kaacs == 6)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg></div>
                                                         @endif
                                                     </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->kaacs == 5)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg></div>
                                                         @endif
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->kaacs == 4)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg></div>
                                                         @endif
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->kaacs == 3)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg></div>
                                                         @endif
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->kaacs == 2)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg></div>
                                                         @endif

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->kaacs == 1)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg></div>
                                                         @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="flex items-center justify-start gap-x-3">


                                                            <span>3. Knowledge of Pathological Basis of Medical Practices</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->kpbms == 6)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif 
                                                    </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->kpbms == 5)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif 
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->kpbms == 4)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif 
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->kpbms == 3)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif 
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->kpbms == 2)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif 

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->kpbms == 1)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif 

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="flex items-center justify-start gap-x-3">


                                                            <span>4. Level of Clinical Competence</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->locc == 6)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->locc == 5)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->locc == 4)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->locc == 3)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->locc == 2)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->locc == 1)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="flex items-center justify-end gap-x-3">


                                                            <span>i. Medical Records - History Taking</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->mr_ht == 6)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif      
                                                    </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->mr_ht == 5)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif   
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->mr_ht == 4)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif   
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->mr_ht == 3)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif   
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->mr_ht == 2)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif   

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->mr_ht == 1)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif   

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="flex items-center justify-end gap-x-3">


                                                            <span> - Admission Work</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->mr_aw == 6)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif       
                                                    </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->mr_aw == 5)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->mr_aw == 4)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->mr_aw == 3)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->mr_aw == 2)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->mr_aw == 1)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="flex items-center justify-end gap-x-3">


                                                            <span> - Progress Notes</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->mr_pn == 6)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif       
                                                    </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->mr_pn == 5)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->mr_pn == 4)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->mr_pn == 3)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->mr_pn == 2)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->mr_pn == 1)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="flex items-center justify-end gap-x-3">


                                                            <span> - Case Summaries</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->mr_cs == 6)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif       
                                                    </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->mr_cs == 5)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->mr_cs == 4)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->mr_cs == 3)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->mr_cs == 2)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->mr_cs == 1)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="flex items-center justify-center gap-x-3">


                                                            <span>ii. Diagnostics Acumen</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->diagnostic_acumen == 6)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif       
                                                    </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->diagnostic_acumen == 5)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->diagnostic_acumen == 4)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->diagnostic_acumen == 3)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->diagnostic_acumen == 2)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->diagnostic_acumen == 1)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="flex items-center justify-center gap-x-3">


                                                            <span>iii. Knowledge and Application of Therapeutics</span> 
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->kaat == 6)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif       
                                                    </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->kaat == 5)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->kaat == 4)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->kaat == 3)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->kaat == 2)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->kaat == 1)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="flex items-center justify-center gap-x-3">


                                                            <span>iv. Interaction with other members of the health team</span>
                                                            
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->iwomoht == 6)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif       
                                                    </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->iwomoht == 5)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->iwomoht == 4)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->iwomoht == 3)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->iwomoht == 2)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->iwomoht == 1)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="flex items-center justify-center gap-x-3">


                                                            <span>v. Compliance with Professional Ethics </span>
                                                            
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->cwpe == 6)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif       
                                                    </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->cwpe == 5)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->cwpe == 4)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->cwpe == 3)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->cwpe == 2)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->cwpe == 1)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-bold text-gray-900 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="flex items-center justify-start gap-x-3">


                                                            <span>5. Motivation and Trainability </span>
                                                            
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->mat == 6)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif       
                                                    </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->mat == 5)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->mat == 4)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->mat == 3)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->mat == 2)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->mat == 1)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="flex items-center justify-center gap-x-3">


                                                            <span>i. Appropriate response to criticism</span>
                                                        </div>
                                                        
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->artc == 6)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif       
                                                    </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->artc == 5)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->artc == 4)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->artc == 3)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->artc == 2)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->artc == 1)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  

                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="flex items-center justify-center gap-x-3">


                                                            <span>ii. Ability to use the library</span>
                                                        </div>
                                                        
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->atutl == 6)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif       
                                                    </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->atutl == 5)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->atutl == 4)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->atutl == 3)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->atutl == 2)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->atutl == 1)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="flex items-center justify-center gap-x-3">


                                                            <span>iii. Ability to present cases during round</span>
                                                        </div>
                                                        
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->atpcdr == 6)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif       
                                                    </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->atpcdr == 5)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->atpcdr == 4)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->atpcdr == 3)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->atpcdr == 2)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->atpcdr == 1)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  

                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="flex items-center justify-center gap-x-3">


                                                            <span>iv. Ability to learn and apply clinical skills</span>
                                                        </div>
                                                        
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->atlaacs == 6)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif       
                                                    </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->atlaacs == 5)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->atlaacs == 4)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->atlaacs == 3)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->atlaacs == 2)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->atlaacs == 1)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="flex items-center justify-center gap-x-3">


                                                            <span>v. Appropriate use of diagnostic facilities</span>
                                                        </div>
                                                        
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->auodf == 6)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif       
                                                    </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->auodf == 5)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->auodf == 4)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->auodf == 3)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->auodf == 2)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->auodf == 1)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="flex items-center justify-end gap-x-3">


                                                            <span>(a) Side Laboratories</span>
                                                        </div>
                                                        
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->side_laboratories == 6)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif       
                                                    </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->side_laboratories == 5)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->side_laboratories == 4)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->side_laboratories == 3)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->side_laboratories == 2)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->side_laboratories == 1)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-normal dark:text-gray-200">
                                                        <div class="flex items-center justify-end gap-x-3">


                                                            <span>(b) Laboratory Requests</span>
                                                        </div>
                                                        
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->laboratory_request == 6)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif       
                                                    </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->laboratory_request == 5)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->laboratory_request == 4)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->laboratory_request == 3)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->laboratory_request == 2)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->laboratory_request == 1)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="flex items-center justify-end gap-x-3">


                                                            <span>(c) Radiology Requests</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->radiology_request == 6)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif       
                                                    </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->radiology_request == 5)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->radiology_request == 4)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->radiology_request == 3)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->radiology_request == 2)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->radiology_request == 1)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="flex items-center justify-end gap-x-3">


                                                            <span>(d) Follow -up of Requests</span>
                                                        </div>
                                                        follow_up_of_results
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->follow_up_of_results == 6)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif       
                                                    </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->follow_up_of_results == 5)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->follow_up_of_results == 4)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->follow_up_of_results == 3)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->follow_up_of_results == 2)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->follow_up_of_results == 1)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  

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
                                                        @if ($record->performaceEvaluation->punctuality == 6)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif       
                                                    </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->punctuality == 5)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->punctuality == 4)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->punctuality == 3)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->punctuality == 2)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->punctuality == 1)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="flex items-center justify-end gap-x-3">


                                                            <span>(b) Availability</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->availablity == 6)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif       
                                                    </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->availablity == 5)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->availablity == 4)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->availablity == 3)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->availablity == 2)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->availablity == 1)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="flex items-center justify-end gap-x-3">


                                                            <span>(c) Endurance</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->endurance == 6)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif       
                                                    </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->endurance == 5)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->endurance == 4)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->endurance == 3)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->endurance == 2)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->endurance == 1)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="flex items-center justify-end gap-x-3">


                                                            <span>(d) Personal Comportment</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->personal_comportment == 6)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif       
                                                    </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->personal_comportment == 5)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->personal_comportment == 4)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->personal_comportment == 3)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->personal_comportment == 2)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->personal_comportment == 1)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="flex items-center justify-end gap-x-3">


                                                            <span>(e) Neatness and Appropriate Attire</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->neatness == 6)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif       
                                                    </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->neatness == 5)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->neatness == 4)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->neatness == 3)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->neatness == 2)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->neatness == 1)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="flex items-center justify-end gap-x-3">


                                                            <span>(f) Sense of Responsibility</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->sense_of_responsibility == 6)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif       
                                                    </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->sense_of_responsibility == 5)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->sense_of_responsibility == 4)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->sense_of_responsibility == 3)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->sense_of_responsibility == 2)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->sense_of_responsibility == 1)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="flex items-center justify-end gap-x-3">


                                                            <span>(g) InterPersonal Relationship</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->interpersonal == 6)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif       
                                                    </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->interpersonal == 5)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->interpersonal == 4)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->interpersonal == 3)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->interpersonal == 2)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->interpersonal == 1)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="flex items-center justify-end gap-x-3">


                                                            <span>(h) Relationship with Hospital Authorities</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->rwha == 6)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif       
                                                    </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->rwha == 5)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->rwha == 4)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->rwha == 3)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->rwha == 2)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->rwha == 1)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm text-gray-900 font-sbold dark:text-gray-200 whitespace-nowrap">
                                                        <div class="flex items-center justify-Start gap-x-3">


                                                            <span>OVERALL EVALUATION SCORE</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->overall_evaluation == 6)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif       
                                                    </td>
                                                    <td class="px-4 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->overall_evaluation == 5)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->overall_evaluation == 4)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->overall_evaluation == 3)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->overall_evaluation == 2)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  

                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        @if ($record->performaceEvaluation->overall_evaluation == 1)
                                                        <div class="flex items-center text-success-800">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                          </svg>
                                                        </div>
                                                         @endif  

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
                    <div class="p-2 mt-2 text-lg text-left ring-2 ring-gray-300">
                    {{$record->performaceEvaluation->general_comments}}
                    </div>
                </div>
                <div class="w-full px-8 py-3">
                    <x-label>Do you consider him/her a fit and proper person to be entered on the full register of the Medical and Dental Councill of Nigeria</x-label>
                    <div class="flex items-center justify-around gap-5 px-12 mb-6">
                        @if ($record->performaceEvaluation->is_fit)
                        <div class="flex items-center text-success-800">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                          </svg> Yes
                        </div>
                        @else
                        <div class="flex items-center text-success-800">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                              </svg>                              
                        </div>  
                        @endif

                    </div>
                    @if (!$record->performaceEvaluation->is_fit)
                        
                   
                    <div class="mt-2">
                        <label for="if_is_fit_is_no_comment" class="block text-sm font-medium leading-6 text-gray-900">If No, give reasons and make further recommendations</label>
                        <div class="p-2 mt-2 text-lg text-left ring-2 ring-gray-300">
                            {{$record->performaceEvaluation->if_is_fit_is_no_comment}}
                            </div>
                    </div>
                    @endif
                </div>



            </div>
        </div>
    </div>

</div>
