<div>
    <x-slot name="headTitle">
        Edit user
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit User '. $record->fullname) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white mb-2 overflow-hidden shadow-xl sm:rounded-lg">
                <form wire:submit="create">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 px-4 py-2 items-center" >
                        <div class="flex flex-col justify-start">
                            <x-label for="name" value="{{ __('Surname') }}" class="text-gray-900"><sup class="text-danger-600 font-medium">*</sup></x-label>
                            <x-input id="name" class="block w-full px-4 mt-1" type="text" wire:model="surname" value="{{$record->surname}}" required autofocus autocomplete="surname" />
                        </div>
                        <div class="flex flex-col justify-start">
                            <x-label for="name" value="{{ __('First Name') }}" class="text-gray-900" />
                            <x-input id="name" class="block w-full px-4 mt-1" type="text" wire:model="first_name" required value="{{ $record->first_name}}"/>
                        </div>
                        <div class="flex flex-col justify-start">
                            <x-label for="name" value="{{ __('Middle Name') }}" class="text-gray-900" />
                            <x-input id="name" class="block w-full px-4 mt-1" type="text" wire:model="middle_name" value="{{ $record->middle_name}}"  />
                        </div>
                        <div class="flex flex-col justify-start">
                            <x-label for="email" value="{{ __('Email') }}" class="text-gray-900" />
                            <x-input id="email" class="block w-full px-4 mt-1" type="email" wire:model="email" value="{{ $record->email}}" required  />
                        </div>
                        <div class="flex flex-col justify-start">
                            <x-label for="phone" value="{{ __('Phone') }}" class="text-gray-900" />
                            <x-input id="phone" class="block w-full px-4 mt-1" type="text" wire:model="phone" value="{{ $record->admin->phone}}" />
                        </div>
                        <div class="flex flex-col justify-start">
                            <x-label for="rank" value="{{ __('Rank') }}" class="text-gray-900" />
                            <x-input id="rank" class="block w-full px-4 mt-1" type="text" wire:model="rank" value="{{ $record->admin->rank}}" />
                        </div>
                        <div x-data="{photoName: null, photoPreview: null}" class="flex flex-col justify-start">
                        <!-- Profile Photo File Input -->
                            <input type="file" id="photo" class="hidden"
                                        wire:model.live="image"
                                        x-ref="photo"
                                        x-on:change="
                                                photoName = $refs.photo.files[0].name;
                                                const reader = new FileReader();
                                                reader.onload = (e) => {
                                                    photoPreview = e.target.result;
                                                };
                                                reader.readAsDataURL($refs.photo.files[0]);
                                        " />

                            <x-label for="photo" value="{{ __('Photo') }}" />

                            <!-- Current Profile Photo -->
                            <div class="mt-2" x-show="! photoPreview">
                                <img src="{{ $this->record->profile_photo_url }}" alt="{{ $this->record->fullname }}" class="rounded-full h-40 w-40 object-cover">
                            </div>
                             <!-- New Profile Photo Preview -->
                            <div class="mt-2" x-show="photoPreview" style="display: none;">
                                <span class="block rounded-full w-20 h-20 bg-cover bg-no-repeat bg-center"
                                    x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                                </span>
                            </div>

                            <x-secondary-button class="mt-2 me-2 p-2" type="button" x-on:click.prevent="$refs.photo.click()">
                                {{ __('Select A New Photo') }}
                            </x-secondary-button>

                            @if ($this->record->profile_photo_path)
                                <x-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                                    {{ __('Remove Photo') }}
                                </x-secondary-button>
                            @endif

                            <x-input-error for="photo" class="mt-2" />
                        </div>
                        <div class="flex flex-col justify-start">
                            <x-label for="rank" value="{{ __('MDCAN Registration Number') }}" class="text-gray-900" />
                            <x-input id="rank" class="block w-full px-4 mt-1" type="text" wire:model="rank" value="{{ $record->admin->rank}}" />
                        </div>
                        <div class="flex flex-col justify-start">
                            <x-label for="rank" value="{{ __('MDCAN Registration Date') }}" class="text-gray-900" />
                            <x-input id="rank" class="block w-full px-4 mt-1" type="text" wire:model="rank" value="{{ $record->admin->rank}}" />
                        </div>


                    </div>
                    <div class="m-5 rounded-lg bg-slate-100 px-4 py-5 max-w-full border-t-2 border-gray-900">
                        <div class="flex items-center justify-evenly pb-3 border-b-2 border-gray-300">
                            <div class="font-semibold text-lg">Qualifications</div>
                            <x-secondary-button type="button" wire:click.prevent="addQualification()" class="px-4 py-2" > Add More Qualification</x-secondary-button>
                        </div>
                        @foreach ($adding as $key=>$item)
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 px-4 py-2">
                            <div class="flex flex-col justify-start">
                                <x-label for="qualification_name.{{$key}}" value="{{ __('Qualification Name') }}" class="text-gray-900" />
                                <x-input id="qualification_name.{{$key}}" class="block w-full px-4 mt-1" type="text" wire:model="qualification.{{$key}}.name"  />
                            </div>
                            <div class="flex flex-col justify-start">
                                <x-label for="quali_date.{{$key}}" value="{{ __('Date') }}" class="text-gray-900" />
                                <x-input id="quali_date.{{$key}}" class="block w-full px-4 mt-1" type="date" wire:model="qualificaton.{{$key}}.date" />
                            </div>
                            <div class="flex items-center justify-center">

                               <x-danger-button type="button" wire:click.prevent="removeQualification({{$key}})" wire:key="formbutton.{{$key}}">Delete Entry</x-secondary-button>
                            </div>


                        </div>
                        @endforeach
                    </div>
                    <div class="m-5 rounded-lg bg-slate-100 px-4 py-4 max-w-full border-t-2 border-gray-900">
                        <div class="flex items-center justify-evenly py-2 mt-2 border-y-2 border-gray-300">
                            <div class="font-semibold text-lg">Medical & Dental Council Additional Qualifications</div>
                            <x-secondary-button type="button" wire:click.prevent="addMQualification()" class="px-4 py-2" > Add More Qualification</x-secondary-button>
                        </div>
                        @foreach ($adding_mdcan as $index_key=>$item)
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 px-4 py-2">
                            <div class="flex flex-col justify-start">
                                <x-label for="qualification_name.{{$index_key}}" value="{{ __('Qualification Name') }}" class="text-gray-900" />
                                <x-input id="qualification_name.{{$index_key}}" class="block w-full px-4 mt-1" type="text" wire:model="qualification.{{$index_key}}.name"  />
                            </div>
                            <div class="flex flex-col justify-start">
                                <x-label for="quali_date.{{$index_key}}" value="{{ __('Date') }}" class="text-gray-900" />
                                <x-input id="quali_date.{{$index_key}}" class="block w-full px-4 mt-1" type="date" wire:model="qualificaton.{{$index_key}}.date" />
                            </div>
                            <div class="flex items-center justify-center">

                               <x-danger-button type="button" wire:click.prevent="removeMQualification({{$index_key}})" wire:key="formbutton.{{$index_key}}">Delete Entry</x-secondary-button>
                            </div>


                        </div>
                        @endforeach

                    </div>

                    <div class="flex py-2 justify-center align-items-center">
                        <x-filament::button
                        type="submit"
                        size="md"
                    >
                        Submit
                    </x-filament::button>
                    </div>
                </form>


            </div>
        </div>
    </div>
</div>
