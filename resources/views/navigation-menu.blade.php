<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex items-center shrink-0">
                    <a href="{{ route('dashboard') }}">
                        <x-application-mark class="block w-auto h-9" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                @if(Auth::guard('web')->check())
                    @if (Auth::user()->roles->first()->name === 'Super-Admin' || Auth::user()->roles->first()->name === 'Admin Officer')
                        <div class="relative inline-flex items-center px-1 pt-1 border-b-2 border-transparent cursor-pointer ms-3 hover:border-gray-500">
                                <x-dropdown align="left">
                                <x-slot name="trigger">
                                    <div class="inline-flex items-center">
                                        {{ __('Settings')}}
                                        <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </div>

                                </x-slot>
                                <x-slot name="content">
                                    @can('create-department')
                                        <x-dropdown-link href="{{ route('department')}}">
                                            {{ __('Department') }}
                                        </x-dropdown-link>
                                    @endcan
                                    @can('list-user')
                                        <x-dropdown-link href="{{ route('user.list')}}">
                                            {{ __('Users') }}
                                        </x-dropdown-link>
                                    @endcan
                                    @can('list-user')
                                        <x-dropdown-link href="{{ route('accomodation.list')}}">
                                            {{ __('Accomodation') }}
                                        </x-dropdown-link>
                                    @endcan
                                    @can('list-role')
                                        <x-dropdown-link href="{{ route('role.list')}}">
                                            {{ __('Role') }}
                                        </x-dropdown-link>
                                    @endcan
                                    @can('list-permission')
                                    <x-dropdown-link href="{{ route('permission.list')}}">
                                        {{ __('Permissions') }}
                                    </x-dropdown-link>
                                    @endcan

                                </x-slot>
                                </x-dropdown>
                            </div>
                    @endif


                    <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    @can('list-intern')
                        <x-nav-link href="{{ route('list.intern') }}" :active="request()->routeIs('list.intern')">
                            {{ __('Intern Doctors') }}
                        </x-nav-link>
                    @endcan
                    @can('view-performance')
                    <x-nav-link href="{{ route('evaluate.list') }}" :active="request()->routeIs('evaluate.list')">
                        {{ __('Evaluate Interns') }}
                    </x-nav-link>
                    @endcan
                    @can('show-locum')
                    <x-nav-link href="{{ route('locum.list') }}" :active="request()->routeIs('locum.list')">
                        {{ __('Staff Report') }}
                    </x-nav-link>
                    @endcan
                    {{-- @can('show-locum')
                    <x-nav-link href="{{ route('attendance.list') }}" :active="request()->routeIs('attendance.list')">
                        {{ __('Take Attendance') }}
                    </x-nav-link>
                    @endcan --}}
                    @can('show-locum')
                    <x-nav-link href="{{ route('supervise') }}" :active="request()->routeIs('supervise')">
                        {{ __('Take Attendance') }}
                    </x-nav-link>
                    @endcan
                    @can('show-locum')
                    <x-nav-link href="{{ route('generate.report') }}" :active="request()->routeIs('generate.report')">
                        {{ __('Generate Report') }}
                    </x-nav-link>
                    @endcan

                @elseif(Auth::guard('intern')->check())
                    <x-nav-link href="{{ route('dashboard-intern') }}" :active="request()->routeIs('dashboard-intern')">
                        {{ __('Profile') }}
                    </x-nav-link>
                @endif
                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <!-- Teams Dropdown -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="relative ms-3">
                        <x-dropdown align="right" width="60">
                            <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition duration-150 ease-in-out bg-white border border-transparent rounded-md hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50">
                                        {{ Auth::user()->currentTeam->name }}

                                        <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                        </svg>
                                    </button>
                                </span>
                            </x-slot>

                            <x-slot name="content">
                                <div class="w-60">
                                    <!-- Team Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Manage Team') }}
                                    </div>

                                    <!-- Team Settings -->
                                    <x-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                        {{ __('Team Settings') }}
                                    </x-dropdown-link>

                                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                        <x-dropdown-link href="{{ route('teams.create') }}">
                                            {{ __('Create New Team') }}
                                        </x-dropdown-link>
                                    @endcan

                                    <!-- Team Switcher -->
                                    @if (Auth::user()->allTeams()->count() > 1)
                                        <div class="border-t border-gray-200"></div>

                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('Switch Teams') }}
                                        </div>

                                        @foreach (Auth::user()->allTeams() as $team)
                                            <x-switchable-team :team="$team" />
                                        @endforeach
                                    @endif
                                </div>
                            </x-slot>
                        </x-dropdown>
                    </div>
                @endif

                <!-- Settings Dropdown -->
                <div class="relative ms-3">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="flex text-sm transition border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300">
                                    <img class="object-cover w-8 h-8 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->fullname }}" />
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition duration-150 ease-in-out bg-white border border-transparent rounded-md hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50">
                                        {{ Auth::user()->fullname }}

                                        <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>
                            @if(Auth::guard('web')->check())
                            <x-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-dropdown-link>
                            @endif
                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-dropdown-link>
                            @endif

                            <div class="border-t border-gray-200"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-dropdown-link href="{{ route('logout') }}"
                                         @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="flex items-center -me-2 sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500">
                    <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            @if (Auth::user()->roles->first()->name === 'Super-Admin' || Auth::user()->roles->first()->name === 'Admin Officer')
            <div class="relative inline-flex items-center px-1 pt-1 border-b-2 border-transparent cursor-pointer ms-3 hover:border-gray-500">
                    <x-dropdown align="left">
                    <x-slot name="trigger">
                        <div class="inline-flex items-center">
                            {{ __('Settings')}}
                            <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </div>

                    </x-slot>
                    <x-slot name="content">
                        @can('create-department')
                            <x-dropdown-link href="{{ route('department')}}">
                                {{ __('Department') }}
                            </x-dropdown-link>
                        @endcan
                        @can('list-user')
                            <x-dropdown-link href="{{ route('user.list')}}">
                                {{ __('Users') }}
                            </x-dropdown-link>
                        @endcan
                        @can('list-user')
                            <x-dropdown-link href="{{ route('accomodation.list')}}">
                                {{ __('Accomodation') }}
                            </x-dropdown-link>
                        @endcan
                        @can('list-role')
                            <x-dropdown-link href="{{ route('role.list')}}">
                                {{ __('Role') }}
                            </x-dropdown-link>
                        @endcan
                        @can('list-permission')
                        <x-dropdown-link href="{{ route('permission.list')}}">
                            {{ __('Permissions') }}
                        </x-dropdown-link>
                        @endcan

                    </x-slot>
                    </x-dropdown>
                </div>
        @endif
            <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            @can('list-intern')
            <x-responsive-nav-link href="{{ route('evaluate.list') }}" :active="request()->routeIs('evaluate.list')">
                {{ __('Evaluate Interns') }}
            </x-responsive-nav-link>
            @endcan
            @can('list-intern')
            <x-responsive-nav-link href="{{ route('locum.list') }}" :active="request()->routeIs('locum.list')">
                {{ __('Staff Report') }}
            </x-responsive-nav-link>
            @endcan
            @can('list-intern')
            <x-responsive-nav-link href="{{ route('generate.report') }}" :active="request()->routeIs('generate.report')">
                {{ __('Monthly Report')}}
            </x-responsive-nav-link>
            @endcan
            @can('list-intern')
            <x-responsive-nav-link href="{{ route('list.intern') }}" :active="request()->routeIs('list.intern')">
                {{ __('Intern Doctors List') }}
            </x-responsive-nav-link>
            @endcan

        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <div class="shrink-0 me-3">
                        <img class="object-cover w-10 h-10 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                    </div>
                @endif

                <div>
                    <div class="text-base font-medium text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="text-sm font-medium text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Account Management -->
                <x-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                    <x-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                        {{ __('API Tokens') }}
                    </x-responsive-nav-link>
                @endif

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <x-responsive-nav-link href="{{ route('logout') }}"
                                   @click.prevent="$root.submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>

                <!-- Team Management -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="border-t border-gray-200"></div>

                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Manage Team') }}
                    </div>

                    <!-- Team Settings -->
                    <x-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" :active="request()->routeIs('teams.show')">
                        {{ __('Team Settings') }}
                    </x-responsive-nav-link>

                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                        <x-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
                            {{ __('Create New Team') }}
                        </x-responsive-nav-link>
                    @endcan

                    <!-- Team Switcher -->
                    @if (Auth::user()->allTeams()->count() > 1)
                        <div class="border-t border-gray-200"></div>

                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Switch Teams') }}
                        </div>

                        @foreach (Auth::user()->allTeams() as $team)
                            <x-switchable-team :team="$team" component="responsive-nav-link" />
                        @endforeach
                    @endif
                @endif
            </div>
        </div>
    </div>
</nav>
