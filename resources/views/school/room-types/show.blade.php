<x-app-layout>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8" >
        <div class="bg-white shadow-md rounded-lg p-4">
            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="School Image" class="w-full h-32 object-cover rounded-lg">
            <div class="mt-4">
                <h3 class="text-xl font-semibold">{{$roomTypes->name}}</h3>
                <p class="text-gray-600">Location</p>
                <p class="mt-2">Description of the school goes here.</p>
            </div>
            <div class="mt-4 flex justify-between">
                <span class="text-gray-600">Total Students: 500</span>
                <span class="text-gray-600">Established: 1990</span>
            </div>
            <div>
                <a href="{{route('room-types.edit', $roomType->id)}}">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded-lg">Edit</button>
                </a>
                <form action="{{route('room-types.destroy', $roomType->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg">Delete</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
