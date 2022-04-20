<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-sm mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md">
                    <div class="flex justify-end px-4 pt-4">
                        <button id="dropdownButton" data-dropdown-toggle="dropdown"
                            class="hidden sm:inline-block text-gray-500 hover:bg-gray-100  focus:outline-none focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5"
                            type="button">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z">
                                </path>
                            </svg>
                        </button>

                        <div id="dropdown"
                            class="hidden z-10 w-44 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700"
                            data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top"
                            style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(846px, 2679px);">
                            <ul class="py-1" aria-labelledby="dropdownButton">
                                <li>
                                    <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100">Edit</a>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 ">Export
                                        Data</a>
                                </li>
                                <li>
                                    <a href=" #"
                                        class="block py-2 px-4 text-sm text-red-600 hover:bg-gray-100">Delete</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=" flex flex-col items-center pb-10">
                        <img class="mb-3 w-24 h-24 rounded-full shadow-lg"
                            src="https://flowbite.com//docs/images/people/profile-picture-3.jpg" alt="Bonnie image">
                        <h5 class="mb-1 text-xl font-medium text-gray-900 ">{{
                            Auth::user()->name }}</h5>
                        <span class="text-sm text-gray-500 dark:text-gray-400">{{
                            Auth::user()->email }}</span>
                        <div class="flex mt-4 space-x-3 lg:mt-6">
                            <a href="#"
                                class="inline-flex items-center py-2 px-4 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">Add
                                friend</a>
                            <a href="#"
                                class="inline-flex items-center py-2 px-4 text-sm font-medium text-center text-gray-900 bg-white rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200">Message</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>