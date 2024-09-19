<x-app-layout>
    <x-slot name="header">
        <h2
            class="flex justify-between items-center mb-4 font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Manufaktur') }}
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
            <h2 class="text-xl font-bold mb-4">Add New Manufaktur</h2>
            <div class="mb-5">
                <label for="text" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">
                    Nama Manufaktur</label>
                <input type="text" id="text"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Coba" autocomplete="off" required />

                <label for="text" class="block mb-1 mt-2 text-sm font-medium text-gray-900 dark:text-white">
                    Nama Detail Manufaktur</label>
                <input type="text" id="text"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Manufaktur detail adalah sekitar" autocomplete="off" required />
            </div>
            <div class="mt-4 flex justify-end gap-2">
                <button id="saveStatusBtn"
                    class="inline-block space-x-1 bg-sky-500 hover:bg-sky-600 py-2.5 px-5 text-white rounded-lg text-sm font-medium">Add</button>
                <button id="closeModalBtn"
                    class="text-gray-500 bg-gray-300 hover:bg-gray-400 py-2.5 px-5 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm">Cancel</button>
            </div>
        </div>
    </div>
    <!-- END MODAL ADD NEW ASSET STATUS-->

    <div class="container mx-auto p-8">
        <div class="bg-white p-4 sm:p-6 rounded-lg shadow-lg">
            <div class="md:flex sm:flex-row justify-between">
                <div class="md:flex">
                    {{-- Pencarian --}}
                    {{-- <div class="relative sm:w-auto mb-4 mt-1 sm:mb-0 z-10">
                        <input type="text" id="search" placeholder="Search"
                            class="border-white bg-sky-100 rounded-lg py-2 px-4 pl-10">
                        <span class="absolute inset-y-0 left-0 pl-3 flex items-center">
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-4.35-4.35M5.635 15.755a7.5 7.5 0 1111.627-11.628 7.5 7.5 0 01-11.628 11.628z" />
                            </svg>
                        </span>
                    </div> --}}
                    <div class="md:ms-2">
                        <button id="filterBtn"
                            class="inline-block mt-1 space-x-1 bg-sky-500 hover:bg-sky-600 py-2.5 px-5 text-white rounded-lg text-sm font-medium">
                            <i class="fa-solid fa-filter"></i>
                            <span>Filter</span>
                        </button>
                    </div>
                </div>
                <div>
                    <button id="deleteSelected"
                        class="hidden mt-1 space-x-1 bg-sky-500 hover:bg-sky-600 py-2.5 px-5 text-white rounded-lg text-sm font-medium">
                        <span>Delete Selected</span>
                    </button>
                    <button id="addStatusBtn"
                        class="inline-block mt-1 space-x-1 bg-sky-500 hover:bg-sky-600 py-2.5 px-5 text-white rounded-lg text-sm font-medium">
                        <i class="fa-solid fa-circle-plus"></i>
                        <span>Add New Manufaktur</span>
                    </button>
                    <button id="actionsButton"
                        class="inline-block mt-1 space-x-1 bg-sky-200 hover:bg-sky-300 py-2.5 px-5 text-sky-600 rounded-lg text-sm font-medium">Actions</button>
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

            <div class="border mt-3"></div>
            <div class="overflow-x-auto mt-2">
                <table class="min-w-full bg-white table-hover">
                    <thead>
                        <tr>
                            <th class="py-3 px-4 border-b text-center">
                                <input id="checkHeader" type="checkbox" value=""
                                    class="w-5 h-5 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </th>
                            <th class="py-3 px-4 text-center border-b">
                                <button><i class="fa-solid fa-eye text-amber-500"></i></button>
                            </th>
                            <th class="py-3 px-4 border-b text-center">Nama Manufaktur</th>
                            <th class="py-3 px-4 border-b text-center">Nama Detail Manufaktur</th>
                            <th class="py-3 px-4 border-b text-center"><i class="fas fa-edit me-3 size-5"></i> <i
                                    class="fas fa-trash ms-3 size-5"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @php
                            $no = 1;
                        @endphp --}}
                        {{-- @foreach ($asset_status as $a) --}}
                        <tr class="bg-white hover:bg-gray-100 border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4 text-center">
                                <input id="checkItem" type="checkbox" value=""
                                    class="w-5 h-5 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </td>
                            <td class="px-6 py-4 text-center">
                                <button><i class="fa-solid fa-eye"></i></button>
                            </td>
                            <td class="px-6 py-4 text-center">
                                Coba
                            </td>
                            <td class="px-6 py-4 text-center">
                                Manufaktur detail adalah sekitar
                            </td>
                            <td class="px-6 py-4 text-center">
                                <button type="button" data-id="" data-modal-target="sourceModal" data-name=""
                                    {{-- onclick="editSourceModal(this)" --}}
                                    class="bg-amber-500 hover:bg-amber-600 px-3 py-1 rounded-md text-xs text-white">
                                    <i class="fas fa-edit size-5"></i>
                                </button>

                                <button
                                {{-- onclick="return assetstatusDelete('','')" --}}
                                    class="bg-red-500 hover:bg-bg-red-300 px-3 py-1 rounded-md text-xs text-white"><i
                                        class="fas fa-trash size-5"></i></button>
                            </td>
                        </tr>
                        <tr class="bg-white hover:bg-gray-100 border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4 text-center">
                                <input id="checkItem" type="checkbox" value=""
                                    class="w-5 h-5 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </td>
                            <td class="px-6 py-4 text-center">
                                <button><i class="fa-solid fa-eye"></i></button>
                            </td>
                            <td class="px-6 py-4 text-center">
                                Coba
                            </td>
                            <td class="px-6 py-4 text-center">
                                Manufaktur detail adalah sekitar
                            </td>
                            <td class="px-6 py-4 text-center">
                                <button type="button" data-id="" data-modal-target="sourceModal" data-name=""
                                    {{-- onclick="editSourceModal(this)" --}}
                                    class="bg-amber-500 hover:bg-amber-600 px-3 py-1 rounded-md text-xs text-white">
                                    <i class="fas fa-edit size-5"></i>
                                </button>

                                <button 
                                {{-- onclick="return assetstatusDelete('','')" --}}
                                    class="bg-red-500 hover:bg-bg-red-300 px-3 py-1 rounded-md text-xs text-white"><i
                                        class="fas fa-trash size-5"></i></button>
                            </td>
                        </tr>
                        <tr class="bg-white hover:bg-gray-100 border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4 text-center">
                                <input id="checkItem" type="checkbox" value=""
                                    class="w-5 h-5 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </td>
                            <td class="px-6 py-4 text-center">
                                <button><i class="fa-solid fa-eye"></i></button>
                            </td>
                            <td class="px-6 py-4 text-center">
                                Coba
                            </td>
                            <td class="px-6 py-4 text-center">
                                Manufaktur detail adalah sekitar
                            </td>
                            <td class="px-6 py-4 text-center">
                                <button type="button" data-id="" data-modal-target="sourceModal" data-name=""
                                    {{-- onclick="editSourceModal(this)" --}}
                                    class="bg-amber-500 hover:bg-amber-600 px-3 py-1 rounded-md text-xs text-white">
                                    <i class="fas fa-edit size-5"></i>
                                </button>

                                <button 
                                {{-- onclick="return assetstatusDelete('','')" --}}
                                    class="bg-red-500 hover:bg-bg-red-300 px-3 py-1 rounded-md text-xs text-white"><i
                                        class="fas fa-trash size-5"></i></button>
                            </td>
                        </tr>
                        {{-- @endforeach --}}
                    </tbody>
                </table>

            </div>
            <div class="mt-4">
                {{-- {{ $asset_status->links() }} --}}
            </div>
        </div>
    </div>
    {{-- MODAL EDIT --}}
    <div class="fixed inset-0 flex items-center justify-center z-50 hidden" id="sourceModal">
        <div class="fixed inset-0 bg-black opacity-50"></div>
        <div class="fixed inset-0 flex items-center justify-center">
            <div class="w-full md:w-1/2 relative bg-white rounded-lg shadow mx-5">
                <div class="flex items-start justify-between p-4 border-b rounded-t">
                    <h3 class="text-xl font-semibold text-gray-900" id="title_source">
                        Tambah Sumber Database
                    </h3>
                    <button type="button" onclick="sourceModalClose(this)" data-modal-target="sourceModal"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center"
                        data-modal-hide="defaultModal">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <form method="POST" id="formSourceModal" enctype="multipart/form-data">
                    @csrf
                    <div class="flex flex-col  p-4 space-y-6">

                        <div class="mb-5">
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
                            <input type="text" id="names" name="name"
                                class="px-3 py-2 border shadow rounded w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 peer hover:shadow-lg"
                                id="" placeholder="Masukan name disini...">
                        </div>
                    </div>
                    <div class="flex items-center p-4 space-x-2 border-t border-gray-200 rounded-b">
                        <button type="submit" id="formSourceButton"
                            class="bg-green-400 m-2 w-40 h-10 rounded-xl hover:bg-green-500">Simpan</button>
                        <button type="button" data-modal-target="sourceModal" onclick="changeSourceModal(this)"
                            class="bg-red-500 m-2 w-40 h-10 rounded-xl text-white hover:shadow-lg hover:bg-red-600">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- CheckBox Selected --}}
    <script>
        const checkHeader = document.getElementById('checkHeader');
        const checkItems = document.querySelectorAll('input[id^="checkItem"]');
        const deleteButton = document.getElementById('deleteSelected');

        // Function to toggle the delete button visibility
        function toggleDeleteButton() {
            const anyChecked = checkHeader.checked || Array.from(checkItems).some(item => item.checked);
            deleteButton.classList.toggle('hidden', !anyChecked);
        }

        // Event listener for checkHeader change
        checkHeader.addEventListener('change', function() {
            checkItems.forEach(item => {
                item.checked = checkHeader.checked;
            });
            toggleDeleteButton();
        });

        // Event listener for each checkItem change
        checkItems.forEach(item => {
            item.addEventListener('change', function() {
                // If all individual items are checked, check the header as well
                checkHeader.checked = Array.from(checkItems).every(item => item.checked);
                toggleDeleteButton();
            });
        });
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
        // dropdown menu
        document.getElementById('actionsButton').addEventListener('click', function() {
            var dropdownMenu = document.getElementById('dropdownMenu');
            dropdownMenu.classList.toggle('hidden');
        });
    ]
        window.addEventListener('click', function(e) {
            var actionsButton = document.getElementById('actionsButton');
            var dropdownMenu = document.getElementById('dropdownMenu');
            if (!actionsButton.contains(e.target)) {
                dropdownMenu.classList.add('hidden');
            }
        });
        // end dropdown menu
    </script>
    <script>
        const editSourceModal = (button) => {
            const formModal = document.getElementById('formSourceModal');
            const modalTarget = button.dataset.modalTarget;
            const id = button.dataset.id;
            const name = button.dataset.name;
            const url = "{{ route('assetstatus.update', ':id') }}".replace(':id', id);

            // Update modal title and input values
            document.getElementById('title_source').innerText = `Update materi_ajar ${name}`;
            document.getElementById('names').value = name;
            document.getElementById('formSourceButton').innerText = 'Simpan';
            formModal.setAttribute('action', url);

            // Clear previous hidden inputs if they exist
            formModal.querySelectorAll('input[type="hidden"]').forEach(input => input.remove());

            // Append CSRF token
            const csrfToken = document.createElement('input');
            csrfToken.setAttribute('type', 'hidden');
            csrfToken.setAttribute('name', '_token');
            csrfToken.setAttribute('value', '{{ csrf_token() }}');
            formModal.appendChild(csrfToken);

            // Append method PATCH
            const methodInput = document.createElement('input');
            methodInput.setAttribute('type', 'hidden');
            methodInput.setAttribute('name', '_method');
            methodInput.setAttribute('value', 'PATCH');
            formModal.appendChild(methodInput);

            // Display the modal
            const status = document.getElementById(modalTarget);
            status.classList.remove('hidden');
        };


        const sourceModalClose = (button) => {
            const modalTarget = button.dataset.modalTarget;
            let status = document.getElementById(modalTarget);
            status.classList.toggle('hidden');
        }

        const assetstatusDelete = async (id, name) => {
            let tanya = confirm(`Apakah anda yakin untuk menghapus Assets Status ${name} ?`);
            if (tanya) {
                await axios.post(`/assetstatus/${id}`, {
                        '_method': 'DELETE',
                        '_token': $('meta[name="csrf-token"]').attr('content')
                    })
                    .then(function(response) {
                        // Handle success
                        location.reload();
                    })
                    .catch(function(error) {
                        // Handle error
                        alert('Error deleting record');
                        console.log(error);
                    });
            }
        }
    </script>
</x-app-layout>
