<x-app-layout>
    <x-slot name="header">
        <div>
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <li class="inline-flex items-center">
                        <a href="#"
                            class="inline-flex items-center text-sm font-medium space-x-1 text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                            <i class="fa-solid fa-gauge text-gray-500"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <i class="fa-solid fa-angle-right text-gray-300"></i>
                            <a href="{{ route('assetstatus.index') }}"
                                class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Setting Asset Status</a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <i class="fa-solid fa-angle-right text-gray-300"></i>
                            <span
                                class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Tambah</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('assetstatus.update', $asset_status->id) }}" method="post">
                        @csrf
                        @method('PATCH')
                        <div>
                            <label for="name">Nama Asset Status</label>
                            <input type="text" id="name" name="name" value="{{ $asset_status->name }}" class="block" placeholder="Nama Asset Status" required>
                        </div>
                        <div>
                            <button type="submit" class="bg-sky-500 hover:bg-sky-600 text-white text-sm rounded-lg py-2.5 px-4">Simpan perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
