<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('My Assets') }}
                    </x-nav-link>
                    {{-- <x-nav-link :href="route('assetstatus.index')" :active="request()->routeIs([
                        'assetstatus.index',
                        'assetstatus.create',
                        'assetstatus.show',
                        'assetstatus.edit',
                    ])">
                        {{ __('Asset Status') }}
                    </x-nav-link> --}}
                </div>

                <div class="hidden sm:flex sm:items-center sm:ms-6">
                    <li class="relative list-none">
                        <x-dropdown>
                            <x-slot name="trigger">
                                <button
                                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                    <div>Assets</div>

                                    <div class="ms-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link :href="route('dashboard')">
                                    {{ __('Perhitungan') }}
                                </x-dropdown-link>
                            </x-slot>
                        </x-dropdown>
                    </li>
                </div>

                <div class="hidden sm:flex sm:items-center sm:ms-6">
                    <li class="relative list-none">
                        <x-dropdown>
                            <x-slot name="trigger">
                                <button
                                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                    <div>Documents</div>

                                    <div class="ms-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link :href="route('dashboard')">
                                    {{ __('Perhitungan') }}
                                </x-dropdown-link>
                            </x-slot>
                        </x-dropdown>
                    </li>
                </div>

                <div class="hidden sm:flex sm:items-center sm:ms-6">
                    <li class="relative list-none">
                        <x-dropdown>
                            <x-slot name="trigger">
                                <button
                                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                    <div>Inventory</div>

                                    <div class="ms-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link :href="route('dashboard')">
                                    {{ __('Perhitungan') }}
                                </x-dropdown-link>
                            </x-slot>
                        </x-dropdown>
                    </li>
                </div>

                <div class="hidden sm:flex sm:items-center sm:ms-6">
                    <li class="relative list-none">
                        <x-dropdown>
                            <x-slot name="trigger">
                                <button
                                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                    <div>Users</div>

                                    <div class="ms-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link :href="route('dashboard')">
                                    {{ __('Perhitungan') }}
                                </x-dropdown-link>
                            </x-slot>
                        </x-dropdown>
                    </li>
                </div>

                <div class="hidden sm:flex sm:items-center sm:ms-6">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('')">
                        {{ __('Approval') }}
                    </x-nav-link>
                </div>

                <div class="hidden sm:flex sm:items-center sm:ms-6">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('')">
                        {{ __('Report') }}
                    </x-nav-link>
                    {{-- <x-nav-link :href="route('users.index')" :active="request()->routeIs([
                        'users.index',
                        'users.create',
                        'users.show',
                        'users.edit',
                    ])">
                        {{ __('Users') }}
                    </x-nav-link> --}}
                    {{-- <x-nav-link :href="route('roles.index')" :active="request()->routeIs([
                        'roles.index',
                        'roles.create',
                        'roles.show',
                        'roles.edit',
                    ])">
                        {{ __('Roles') }}
                    </x-nav-link> --}}
                    {{-- <x-nav-link :href="route('permissions.index')" :active="request()->routeIs([
                        'permissions.index',
                        'permissions.create',
                        'permissions.show',
                        'permissions.edit',
                    ])">
                        {{ __('Permissions') }}
                    </x-nav-link> --}}
                </div>

                <div class="hidden sm:flex sm:items-center sm:ms-6">
                    <li class="relative list-none">
                        <x-dropdown>
                            <x-slot name="trigger">
                                <button
                                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                    <div>Setup</div>

                                    <div class="ms-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link :href="route('dashboard')">
                                    {{ __('Maintenance') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('dashboard')">
                                    {{ __('Alerts') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('dashboard')">
                                    {{ __('Custom Fields') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('dashboard')">
                                    {{ __('Database') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('dashboard')">
                                    {{ __('Role & Permission') }}
                                </x-dropdown-link>
                                <div class="relative">
                                    <button id="settings-button"
                                        class="flex justify-between items-center w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 dark:text-gray-400 bg-white dark:bg-gray-800 focus:outline-none transition ease-in-out duration-150">
                                        {{ __('Settings') }}
                                        <svg class="ml-2 fill-current h-4 w-4 transform -rotate-90"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                    <div id="settings-submenu"
                                        class="hidden absolute left-full top-[-185px] ml-1 w-48 border bg-white shadow-lg rounded-md">
                                        <x-dropdown-link :href="route('assetstatus.index')">
                                            {{ __('Asset Status') }}
                                        </x-dropdown-link>
                                        <x-dropdown-link :href="route('dashboard')">
                                            {{ __('Brands') }}
                                        </x-dropdown-link>
                                        <x-dropdown-link :href="route('dashboard')">
                                            {{ __('Asset Category') }}
                                        </x-dropdown-link>
                                        <x-dropdown-link :href="route('dashboard')">
                                            {{ __('Company') }}
                                        </x-dropdown-link>
                                        <x-dropdown-link :href="route('dashboard')">
                                            {{ __('Departement') }}
                                        </x-dropdown-link>
                                        <x-dropdown-link :href="route('dashboard')">
                                            {{ __('Features') }}
                                        </x-dropdown-link>
                                        <x-dropdown-link :href="route('manufacture.index')">
                                            {{ __('Manufacturer') }}
                                        </x-dropdown-link>
                                        <x-dropdown-link :href="route('dashboard')">
                                            {{ __('Models') }}
                                        </x-dropdown-link>
                                        <x-dropdown-link :href="route('dashboard')">
                                            {{ __('Suppliers') }}
                                        </x-dropdown-link>
                                        <x-dropdown-link :href="route('dashboard')">
                                            {{ __('Types') }}
                                        </x-dropdown-link>
                                    </div>
                                </div>
                            </x-slot>
                        </x-dropdown>
                    </li>
                </div>

            </div>

            <div class="flex">
                <!-- Notification Dropdown -->
                <div class="hidden mt-1 sm:flex sm:items-center sm:ms-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                <div><svg xmlns="http://www.w3.org/2000/svg" fill="#4B90FE" viewBox="0 0 24 24" stroke="#4B90FE" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a7.002 7.002 0 00-6-6.917V3a1 1 0 10-2 0v1.083A7.002 7.002 0 004 11v3.159c0 .538-.214 1.055-.595 1.438L2 17h13z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19a3 3 0 01-6 0" />
                                </svg></div>
                                <!-- Notification Count Badge -->
                                <span
                                    class="absolute top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 bg-red-600 rounded-full transform -translate-y-2/9">
                                    3
                                </span>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <div class="py-1">
                                <x-dropdown-link href="#">
                                    {{ __('Notification 1') }}
                                </x-dropdown-link>
                                <x-dropdown-link href="#">
                                    {{ __('Notification 2') }}
                                </x-dropdown-link>
                                <x-dropdown-link href="#">
                                    {{ __('Notification 3') }}
                                </x-dropdown-link>
                                <!-- Add more notifications as needed -->
                            </div>
                        </x-slot>
                    </x-dropdown>
                </div>

                <!-- Settings Dropdown -->
                <div class="hidden sm:flex sm:items-center sm:ms-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                {{-- <div>{{ Auth::user()->name }}</div> --}}
                                <div><img src="{{ asset('assets/img/user.png') }}" class="w-8" alt=""
                                        srcset=""></div>

                                {{-- <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div> --}}
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('assetstatus.index')" :active="request()->routeIs([
                'assetstatus.index',
                'assetstatus.create',
                'assetstatus.show',
                'assetstatus.edit',
            ])">
                {{ __('Asset Status') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var settingsButton = document.getElementById('settings-button');
        var settingsSubmenu = document.getElementById('settings-submenu');

        var allSubmenus = [settingsSubmenu];
        var allButtons = [settingsButton];

        function closeAllSubmenus() {
            allSubmenus.forEach(function(submenu) {
                submenu.classList.add('hidden');
            });
        }

        function toggleSubmenu(button, submenu) {
            closeAllSubmenus();
            submenu.classList.toggle('hidden');
        }

        allButtons.forEach(function(button, index) {
            button.addEventListener('click', function(event) {
                event.preventDefault();
                event.stopPropagation();
                toggleSubmenu(button, allSubmenus[index]);
            });
        });

        document.addEventListener('click', function(event) {
            if (!allButtons.some(button => button.contains(event.target)) &&
                !allSubmenus.some(submenu => submenu.contains(event.target))) {
                closeAllSubmenus();
            }
        });

        allSubmenus.forEach(function(submenu) {
            submenu.addEventListener('click', function(event) {
                event.stopPropagation();
            });
        });
    });

    document.getElementById('settings-button').addEventListener('click', function() {
        var submenu = document.getElementById('settings-submenu');
        submenu.classList.toggle('hidden');
    });
</script>
