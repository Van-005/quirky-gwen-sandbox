<x-app-layout>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8" >
        <form action="{{route('school-rooms.store')}}" method="POST">
            @csrf

                  
 
                <div class="text-white flex flex-col">

                    <div>
                        <x-text-field name="name" label="Name"/>
                    </div>
                    <div class="flex flex-col">
                        <label for="description" class="text-white shadow-sm">description</label>
                        <textarea name="description" id="description" cols="30" rows="10"></textarea>
                    </div>
                    <div>
                  
                    <label for="room_type">
                        room_type
                    </label>
                    

                    <select name="school_room_type_id" id="room_type">
                        @foreach($room_types as $room_type)
                            <option value="{{$room_type->id}}">{{$room_type->name}}</option>
                        @endforeach    
                    </select>
                </div>
                
                <button type="submit" class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 mt-10">create</button>
            </div>
        </form>
    </div>
</x-app-layout>
