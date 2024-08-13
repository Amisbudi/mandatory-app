<x-app-layout>
    <x-slot name="header">
        <h2
            class="flex justify-between items-center mb-4 font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Asset Status') }}
            <a href="{{ route('assetstatus.create') }}"
                class="inline-block space-x-1 bg-sky-500 hover:bg-sky-600 py-2.5 px-5 text-white rounded-lg text-sm font-medium">
                <i class="fa-solid fa-circle-plus"></i>
                <span>Add Asset</span>
            </a>
        </h2>
    </x-slot>

    <!-- MODAL ADD NEW ASSET STATUS-->
    <div id="statusModal" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center hidden z-50">
        <div class="bg-white p-6 rounded-lg shadow-lg w-96">
            <h2 class="text-xl font-bold mb-4">Add Asset Status</h2>
            <div class="mb-5">
                <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Add Status Name</label>
                <input type="text" id="text"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Enter Asset Status Name" autocomplete="off" required />
            </div>
            <div class="mb-5">
                <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Description</label>
                <input type="text" id="text"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Enter Description" autocomplete="off" required />
            </div>
            <div class="mt-4 flex justify-end gap-2">
                <button id="saveStatusBtn"
                    class="inline-block space-x-1 bg-sky-500 hover:bg-sky-600 py-2.5 px-5 text-white rounded-lg text-sm font-medium">Simpan</button>
                <button id="closeModalBtn"
                    class="text-gray-500 bg-gray-300 hover:bg-gray-400 py-2.5 px-5 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm">Batal</button>
            </div>
        </div>
    </div>
    <!-- END MODAL ADD NEW ASSET STATUS-->
    <!-- MODAL EDIT NEW ASSET STATUS-->
    <div id="editModal" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center hidden z-50">
        <div class="bg-white p-6 rounded-lg shadow-lg w-96">
            <h2 class="text-xl font-bold mb-4">Edit Asset Status</h2>
            <div class="mb-5">
                <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Add Status Name</label>
                <input type="text" id="text"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Enter Asset Status Name" autocomplete="off" required />
            </div>
            <div class="mb-5">
                <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Description</label>
                <input type="text" id="text"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Enter Description" autocomplete="off" required />
            </div>
            <div class="mt-4 flex justify-end gap-2">
                <button id="saveStatusBtn"
                    class="inline-block space-x-1 bg-sky-500 hover:bg-sky-600 py-2.5 px-5 text-white rounded-lg text-sm font-medium">Simpan</button>
                <button id="closeModal"
                    class="text-gray-500 bg-gray-300 hover:bg-gray-400 py-2.5 px-5 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm">Batal</button>
            </div>
        </div>
    </div>
    <!-- END MODAL EDIT NEW ASSET STATUS-->
    <!-- MODAL DELETE NEW ASSET STATUS-->
    <div id="deleteModal" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center hidden z-50">
        <div class="bg-white p-6 rounded-lg shadow-lg w-96 flex flex-col items-center">
            <h2 class="text-xl font-bold mb-4">Konfirmasi Hapus Data</h2>
            <p class="text-sm font-semibold text-gray-600 mb-4">Apakah Anda yakin untuk hapus data ini?</p>
            <div class="mt-4 flex justify-end gap-2">
                <button id="saveStatusBtn"
                    class="inline-block space-x-1 bg-red-500 hover:bg-red-600 py-2.5 px-5 text-white rounded-lg text-sm font-medium">Simpan</button>
                <button id="close"
                    class="text-gray-500 bg-gray-300 hover:bg-gray-400 py-2.5 px-5 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm">Batal</button>
            </div>
        </div>
    </div>
    <!-- END MODAL DELETE NEW ASSET STATUS-->
    <div class="container mx-auto p-8">
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <div class="flex justify-between items-center mb-4">
                <div class="relative z-10">
                    <input type="text" id="search" placeholder="Search"
                        class="border rounded-lg py-2 px-4 w-full pl-10">
                    <span class="absolute inset-y-0 left-0 pl-3 flex items-center">
                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-4.35-4.35M5.635 15.755a7.5 7.5 0 1111.627-11.628 7.5 7.5 0 01-11.628 11.628z" />
                        </svg>
                    </span>
                </div>
                <div>
                    <button id="addStatusBtn"
                        class="inline-block space-x-1 bg-sky-500 hover:bg-sky-600 py-2.5 px-5 text-white rounded-lg text-sm font-medium">
                        <i class="fa-solid fa-circle-plus"></i>
                        <span>Add New Asset Status</span>
                    </button>
                    <button id="actionsButton"
                        class="inline-block space-x-1 bg-sky-200 hover:bg-sky-300 py-2.5 px-5 text-sky-600 rounded-lg text-sm font-medium">Actions</button>
                    <!-- Dropdown menu -->
                    <div id="dropdownMenu"
                        class="origin-top-right absolute right-12 mt-2 w-36 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 hidden">
                        <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="actionsButton">
                            <a href="#"
                                class="block px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-100"
                                role="menuitem">Export to Excel</a>
                            <a href="#"
                                class="block px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-100"
                                role="menuitem">Export to PDF</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border">
                    <thead>
                        <tr>
                            <th class="py-3 px-4 border-b text-left">
                                <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600">
                            </th>
                            <th class="flex gap-2 py-3 px-4 border-b text-left"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg> Asset Status</th>
                            <th class="py-3 px-4 border-b text-left">Description</th>
                            <th class="py-3 px-4 border-b text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="table-body">

                    </tbody>
                </table>
            </div>

            <div class="mt-4 flex justify-end items-center">
                <div class="flex gap-5">
                    <div class="gap-5">
                        <select id="rowsPerPage" class="border-gray-300 rounded-lg py-2 px-4">
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="20">20</option>
                        </select>
                    </div>
                    <div class="gap-5">
                        <button id="prev" class="bg-gray-300 text-gray-700 px-4 py-2 rounded-l">
                            < </button>
                        </button>
                        <span id="page-info" class="px-4 py-2">1</span>
                        <button id="next" class="bg-gray-300 text-gray-700 px-4 py-2 rounded-r"> >
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const data = [{
                id: 1,
                status: 'Broken',
                description: 'The asset is not functional.'
            },
            {
                id: 2,
                status: 'Broken',
                description: 'The asset is not functional.'
            },
            {
                id: 3,
                status: 'Broken',
                description: 'The asset is not functional.'
            },
        ];

        const rowsPerPageSelect = document.getElementById('rowsPerPage');
        const tableBody = document.getElementById('table-body');
        const pageInfo = document.getElementById('page-info');

        let rowsPerPage = parseInt(rowsPerPageSelect.value, 10);
        let currentPage = 1;

        rowsPerPageSelect.addEventListener('change', function() {
            rowsPerPage = parseInt(this.value, 10);
            currentPage = 1;
            displayTable();
        });

        document.getElementById('next').addEventListener('click', function() {
            if (currentPage < Math.ceil(data.length / rowsPerPage)) {
                currentPage++;
                displayTable();
            }
        });

        document.getElementById('prev').addEventListener('click', function() {
            if (currentPage > 1) {
                currentPage--;
                displayTable();
            }
        });

        function displayTable() {
            tableBody.innerHTML = '';
            const start = (currentPage - 1) * rowsPerPage;
            const end = start + rowsPerPage;
            const paginatedItems = data.slice(start, end);

            paginatedItems.forEach(item => {
                const row = `<tr class="bg-blue-50">
                            <td class="py-3 px-4 border-b">
                                <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600">
                            </td>
                            <td class="py-3 px-4 border-b">
                                <span class="inline-block align-middle">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                                </span>
                                ${item.status}
                            </td>
                            <td class="py-3 px-4 border-b">${item.description}</td>
                            <td class="py-3 px-4 border-b">
                                <button id="editStatusBtn" class="bg-yellow-400 text-white px-3 py-1 rounded-md mr-2">
                                    <svg class="h-4 w-4 inline-block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H9m6-4H9m6 8H9m10 0a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2h10z" />
                                    </svg>
                                </button>
                                <button id="deleteStatusBtn" class="bg-red-500 text-white px-3 py-1 rounded-md">
                                    <svg class="h-4 w-4 inline-block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.139 21H7.861a2 2 0 01-1.994-1.858L5 7m5-3h4m-4 0a2 2 0 012-2h0a2 2 0 012 2m-4 0h4m-4 0V3a2 2 0 014 0v1m5 0h-4m4 0V7H7V5m0 0h10" />
                                    </svg>
                                </button>
                            </td>
                         </tr>`;
                tableBody.innerHTML += row;
            });

            pageInfo.innerText = currentPage;
        }

        displayTable();
    </script>
    <script>
        // modal add new asset status
        document.getElementById('addStatusBtn').addEventListener('click', function() {
            document.getElementById('statusModal').classList.remove('hidden');
            document.getElementById('searchContainer').classList.add('hidden'); // Hide search when modal is shown
        });

        document.getElementById('closeModalBtn').addEventListener('click', function() {
            document.getElementById('statusModal').classList.add('hidden');
            document.getElementById('searchContainer').classList.remove(
                'hidden'); // Show search when modal is hidden
        });
        // modal edit asset status
        document.getElementById('editStatusBtn').addEventListener('click', function() {
            document.getElementById('editModal').classList.remove('hidden');
            document.getElementById('searchContainer').classList.add('hidden'); // Hide search when modal is shown
        });

        document.getElementById('closeModal').addEventListener('click', function() {
            document.getElementById('editModal').classList.add('hidden');
            document.getElementById('searchContainer').classList.remove(
                'hidden'); // Show search when modal is hidden
        });
                // modal delete asset status
        document.getElementById('deleteStatusBtn').addEventListener('click', function() {
            document.getElementById('deleteModal').classList.remove('hidden');
            document.getElementById('searchContainer').classList.add('hidden'); // Hide search when modal is shown
        });

        document.getElementById('close').addEventListener('click', function() {
            document.getElementById('deleteModal').classList.add('hidden');
            document.getElementById('searchContainer').classList.remove(
                'hidden'); // Show search when modal is hidden
        });
        // dropdown menu
        document.getElementById('actionsButton').addEventListener('click', function() {
            var dropdownMenu = document.getElementById('dropdownMenu');
            dropdownMenu.classList.toggle('hidden');
        });

        window.addEventListener('click', function(e) {
            var actionsButton = document.getElementById('actionsButton');
            var dropdownMenu = document.getElementById('dropdownMenu');
            if (!actionsButton.contains(e.target)) {
                dropdownMenu.classList.add('hidden');
            }
        });
        // end dropdown menu
    </script>
</x-app-layout>
