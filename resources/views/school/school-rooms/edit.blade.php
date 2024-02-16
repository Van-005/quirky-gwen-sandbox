<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Update '. $schoolRoom->name) }}
        </h2>
    </x-slot>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8" >
        <form action="{{route('school-rooms.update', $schoolRoom)}}" method="POST">
            @csrf
            @method('PUT')
            <div>       
            <label for="name" class="text-white shadow-sm">name</label>
        <input type="text"  name="name" id="name" autocomplete="school_name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 mt-2">

        <button type="submit" class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 mt-10">{{__('Save')}}</button>
            </div>
        </form>
    </div>
</x-app-layout>