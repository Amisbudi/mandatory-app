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
            <div class="mt-4 flex justify-end gap-2">
                <button id="saveStatusBtn"
                    class="inline-block space-x-1 bg-sky-500 hover:bg-sky-600 py-2.5 px-5 text-white rounded-lg text-sm font-medium">Simpan</button>
                <button id="closeModalBtn"
                    class="text-gray-500 bg-gray-300 hover:bg-gray-400 py-2.5 px-5 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm">Batal</button>
            </div>
        </div>
    </div>
    <!-- END MODAL ADD NEW ASSET STATUS-->

    <div class="container mx-auto p-8">
        <div class="bg-white p-4 sm:p-6 rounded-lg shadow-lg">
            <div class="flex flex-col sm:flex-row justify-between items-center mb-4">
                <div class="relative w-full sm:w-auto mb-4 sm:mb-0 z-10">
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
                    <button id="deleteButton" type="hidden"
                        class="inline-block space-x-1 bg-red-500 hover:bg-red-600 py-2.5 px-5 text-white rounded-lg text-sm font-medium mr-1"><i
                            class="fas fa-trash mr-2"></i> Delete selected
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
                            <div class="py-1" role="menu" aria-orientation="vertical"
                                aria-labelledby="actionsButton">
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
                            <th scope="col" class="px-6 py-3 text-center">
                                <input type="checkbox" class="rounded-md" onchange="checkAll(this)" name="check">
                            </th>
                            <th class="px-6 py-4 border-b text-center">No
                            </th>
                            <th class="px-6 py-4 border-b text-left">Asset Status</th>
                            <th class="px-6 py-4 border-b text-left">Description</th>
                            <th class="px-6 py-4 border-b text-right"></th>
                            <th class="px-6 py-4 border-b text-right">
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($asset_status as $a)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="col" class="px-6 py-3 text-center">
                                    <input type="checkbox" class="rounded-md" name="user_id[]">
                                </th>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center">
                                    {{ $no++ }}
                                </th>
                                <td class="px-6 py-4 text-left">
                                    {{ $a->name }}
                                </td>
                                <td class="px-6 py-4 text-left">
                                    <div>The asset is not functional.</div>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    {{-- BUTTON EDIT --}}
                                    <button type="button" data-id="{{ $a->id }}" data-modal-target="sourceModal"
                                        data-name="{{ $a->name }}" onclick="editSourceModal(this)"
                                        class="bg-amber-500 hover:bg-amber-600 px-3 py-1 rounded-md text-xs text-white">
                                        <i class="fas fa-edit"></i>
                                    </button>

                                    {{-- BUTTON HAPUS --}}
                                    <button
                                        onclick="return assetstatusDelete('{{ $a->id }}','{{ $a->name }}')"
                                        class="bg-red-500 hover:bg-bg-red-300 px-3 py-1 rounded-md text-xs text-white"><i
                                            class="fas fa-trash"></i></button>

                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
            <div class="mt-4">
                {{ $asset_status->links() }}
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
                            class="inline-block space-x-1 bg-sky-500 hover:bg-sky-600 py-2.5 px-5 text-white rounded-lg text-sm font-medium">Simpan</button>
                        <button type="button" data-modal-target="sourceModal" onclick="changeSourceModal(this)"
                            class="inline-block space-x-1 bg-red-500 hover:bg-red-600 py-2.5 px-5 text-white rounded-lg text-sm font-medium">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            const selectedItemsKey = 'selectedItems';
            let selectedItems = JSON.parse(localStorage.getItem(selectedItemsKey)) || [];

            function updateLocalStorage() {
                localStorage.setItem(selectedItemsKey, JSON.stringify(selectedItems));
            }

            function updateCheckboxes() {
                const checkboxes = document.querySelectorAll('input[name="user_id[]"]');
                const checkAllBox = document.querySelector('input[name="check"]');
                let allChecked = true;

                checkboxes.forEach(checkbox => {
                    if (selectedItems.includes(checkbox.value)) {
                        checkbox.checked = true;
                    } else {
                        allChecked = false;
                    }
                });

                checkAllBox.checked = allChecked;
            }

            function handleCheckboxChange(event) {
                const checkbox = event.target;
                const checkAllBox = document.querySelector('input[name="check"]');

                if (checkbox.checked) {
                    if (!selectedItems.includes(checkbox.value)) {
                        selectedItems.push(checkbox.value);
                    }
                } else {
                    selectedItems = selectedItems.filter(item => item !== checkbox.value);
                }

                updateLocalStorage();

                const checkboxes = document.querySelectorAll('input[name="user_id[]"]');
                checkAllBox.checked = Array.from(checkboxes).every(cb => cb.checked);
            }

            document.querySelectorAll('input[name="user_id[]"]').forEach(checkbox => {
                checkbox.addEventListener('change', handleCheckboxChange);
            });

            document.querySelector('input[name="check"]').addEventListener('change', function(event) {
                const checkAll = event.target;
                const checkboxes = document.querySelectorAll('input[name="user_id[]"]');

                checkboxes.forEach(checkbox => {
                    if (!checkbox.disabled) {
                        checkbox.checked = checkAll.checked;
                        if (checkAll.checked) {
                            if (!selectedItems.includes(checkbox.value)) {
                                selectedItems.push(checkbox.value);
                            }
                        } else {
                            selectedItems = selectedItems.filter(item => item !== checkbox.value);
                        }
                    }
                });

                updateLocalStorage();
            });
            const deleteButton = document.getElementById('deleteButton');
            const checkboxes = document.querySelectorAll('input[type="checkbox"]');

            function showDeleteButton() {
                const checkedBoxes = document.querySelectorAll('input[type="checkbox"]:checked');
                deleteButton.classList.toggle('hidden', checkedBoxes.length === 0);
            }

            showDeleteButton();

            checkboxes.forEach(checkbox => {
                checkbox.addEventListener('change', showDeleteButton);
            });

            function deleteSelected() {
                const checkedBoxes = document.querySelectorAll('input[type="checkbox"]:checked');
                checkedBoxes.forEach(checkbox => {
                    checkbox.parentNode.remove();
                });
                showDeleteButton();
            }

            // deleteButton.addEventListener('click', deleteSelected);
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
            document.getElementById('title_source').innerText = `Update Asset Status ${name}`;
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
                await axios.post(`/setting/assetstatus/${id}`, {
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
