@include('modal.register-modal')
{{-- @include('modal.edit-modal') --}}
@include('modal.test')

<x-dashboard-layout>

    <div class=" ml-80 mt-40 pl-10 mr-10 mb-40">
        <div class=" flex justify-end mb-5">
            <button data-modal-target="simpleModal" data-modal-toggle="simpleModal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                Add user
            </button>
            
        </div>
        <div class="relative z-0 overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="p-4">
                            <div class="flex items-center">
                                <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="checkbox-all-search" class="sr-only">checkbox</label>
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Last Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            First Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Middle Initial
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Contact Number
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Guardian Contact Number
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Department
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user )
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-200 dark:hover:bg-gray-700">
                            <td class="w-4 p-4">
                                <div class="flex items-center">
                                    <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                </div>
                            </td>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $user->school_id }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $user->last_name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $user->first_name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $user->middle_initial }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $user->contact_number }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $user->parent_cnumber }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $user->department }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $user->is_safe }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $user->email }}
                            </td>
                            <td class="flex items-center px-6 py-4 space-x-3">
                                <a href=""  data-toggle="modal" data-target="#ModalEdit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                    <button id="editModalBtn">
                                        Edit
                                    </button>
                                </a>
                                <form method="POST" action="/dashboard/{{ $user->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underline">Remove</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-dashboard-layout>
