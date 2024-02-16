<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
            {{ Auth::user()->name }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="">
                        @csrf
                        <x-text-input name="name" label="Name" placeholder="Name"></x-text-input>
                        <x-text-input name="email" label="Email" placeholder="Email"></x-text-input>
                        <x-text-input name="password" label="Password" placeholder="Password"></x-text-input>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>