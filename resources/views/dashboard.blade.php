<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <div class="flex items-center justify-between">
                <div>{{ __('Dashboard') }}</div>
                <div class="flex gap-3">
                    <button class="bg-[#4B90FE] text-sm text-white p-2 rounded-[10px]">
                        Manage Dashboard
                    </button>
                    <x-dropdown>
                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center px-3 bg-[#cecdcd] py-3 border border-transparent text-sm leading-4 font-medium rounded-md text-[#6B869D] dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                <div>All Dashboard</div>

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
                    <button class="bg-[#4B90FE] text-sm text-white p-2 rounded-[10px]">
                        <div class="flex items-center gap-3">
                            <div class="pt-1"><i class="fi fi-br-plus"></i></div>
                            <div>Add Assets</div>
                        </div>
                    </button>
                </div>
            </div>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
