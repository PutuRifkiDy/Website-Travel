<x-app-layout>
    @section('content-dashboard')
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                @if (session('message'))
                    <div id="toast-danger"
                        class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow-sm dark:text-gray-400 dark:bg-gray-800"
                        role="alert">
                        <div class="ms-3 text-sm font-normal">{{ session('message') }}</div>
                        <button type="button"
                            class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                            data-dismiss-target="#toast-danger" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                        </button>
                    </div>
                @endif
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10 flex flex-col gap-y-5">
                    <div class="pb-5">
                        <div class="flex md:flex-row flex-col gap-10 md:gap-0 justify-between items-center">
                            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                                {{ __('Manage NewsLetter') }}
                            </h2>
                        </div>
                    </div>
                    <table id="export-table">
                        <thead>
                            <tr>
                                <th>
                                    <span class="flex items-center">
                                        Name
                                    </span>
                                </th>
                                <th>
                                    <span class="flex items-center">
                                        Email
                                    </span>
                                </th>
                                <th>
                                    <span class="flex items-center">
                                        Action
                                    </span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="">
                            @forelse ($newsletters as $newsletter)
                                <tr class="">
                                    <td>{{ $newsletter->user->name }}</td>
                                    <td>{{ $newsletter->email }}</td>
                                    <td class="flex flex-row gap-5 items-center">
                                        <a href="{{ route('newsletter.edit', $newsletter) }}"
                                            class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                                            Edit
                                        </a>
                                        <form action="{{ route('newsletter.destroy', $newsletter) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="font-bold py-4 px-6 bg-red-800 text-white rounded-full">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <p>Data tidak ditemukan</p>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endsection
</x-app-layout>
