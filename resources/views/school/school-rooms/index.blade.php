<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('SchoolRoom') }}
        </h2>
    </x-slot>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8 dark:text-white" >
        <a href="{{route('school-rooms.create')}}">
            Create
        </a>
    </div>

    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <ul role="list" class="divide-y divide-gray-100">

    @foreach($schoolRooms as $schoolRoom)
      <li class="flex justify-between gap-x-6 py-5 dark:text-white">
        <div class="flex min-w-0 gap-x-4">
          <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
          <div class="min-w-0 flex-auto">
            <a href="{{route('school-rooms.show', $schoolRoom)}}" class="text-sm font-semibold leading-6 text-gray-900 dark:text-gray-200">{{$schoolRoom->id}} {{$schoolRoom->name}}</a>
            <p class="mt-1 truncate text-xs leading-5 text-gray-500">leslie.alexander@example.com</p>
          </div>
        </div>
        <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end"> 
          <a href="{{route('school-rooms.edit', $schoolRoom)}}">
            <button>{{__("Edit")}}</button>
          </a>
        </div>
      </li>
    @endforeach
</ul>
</div>
</x-app-layout>