<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Update '. $student->name) }}
        </h2>
    </x-slot>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8" >
        <form action="{{route('students.update', $student)}}" method="POST">
            @csrf
            @method('PUT')
            <div>       
                <x-text-field name="last_name" label="Last name" value="{{$student->last_name}}"/>
                <x-text-field name="first_name" label="First name" value="{{$student->first_name}}" />
                <x-text-field name="middle_name" label="Middle name" value="{{$student->middle_name}}" />
                <x-text-field name="gender" label="Gender" value="{{$student->gender}}"/>    
                <x-text-field name="birth_date" label="Birth date" value="{{$student->birth_date}}"/>    
                <x-text-field name="address" label="Address" value="{{$student->address}}"/>    
                <x-text-field name="phone" label="Phone" value="{{$student->phone}}"/>    
              
                <button type="submit" class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 mt-10">{{__('Save')}}</button>
            </div>
        </form>
        <ul class="dark:text-gray-200">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
</x-app-layout>