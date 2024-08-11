<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-4">
            <section>
                @if (session('success'))
                    <div class="flex items-center p-4 bg-emerald-500 text-white rounded-xl" role="alert">
                        <i class="fa-solid fa-circle-check"></i>
                        <div class="ml-3 text-sm font-reguler">
                            {{ session('success') }}
                        </div>
                    </div>
                @endif
            </section>
            @can('create user')
                <a href="{{ route('users.create') }}"
                    class="inline-block space-x-1 bg-sky-500 hover:bg-sky-600 py-2.5 px-5 text-white rounded-lg text-sm font-medium">
                    <i class="fa-solid fa-circle-plus"></i>
                    <span>Tambah</span>
                </a>
            @endcan
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left rtl:text-right">
                            <thead>
                                <tr>
                                    <th scope="col" class="px-6 py-3">No</th>
                                    <th scope="col" class="px-6 py-3">Name</th>
                                    <th scope="col" class="px-6 py-3">Email</th>
                                    <th scope="col" class="px-6 py-3">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($users as $key => $user)
                                    <tr>
                                        <th scope="row" class="px-6 py-4 whitespace-nowrap">
                                            {{ $users->perPage() * ($users->currentPage() - 1) + $key + 1 }}
                                        </th>
                                        <td class="px-6 py-4">{{ $user->name }}</td>
                                        <td class="px-6 py-4">{{ $user->email }}</td>
                                        <td class="px-6 py-4">
                                            @can('show user')
                                                <a href="{{ route('users.show', $user->id) }}"
                                                    class="bg-blue-500 hover:bg-blue-600 px-3 py-2 rounded-lg text-white transition-all ease-in-out">detail</a>
                                            @endcan
                                            @can('edit user')
                                                <a href="{{ route('users.edit', $user->id) }}"
                                                    class="bg-amber-500 hover:bg-amber-600 px-3 py-2 rounded-lg text-white transition-all ease-in-out">edit</a>
                                            @endcan
                                            @can('delete user')
                                                <form action="{{ route('users.destroy', $user->id) }}" method="post"
                                                    class="inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="bg-red-500 hover:bg-red-600 px-3 py-2 rounded-lg text-white transition-all ease-in-out">delete</button>
                                                </form>
                                            @endcan
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3">Users data not found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
