<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('CreateStudent') }}
        </h2>
    </x-slot>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8" >

        <form action="{{route('students.store')}}" method="POST">
            @csrf
            <div>       
                <x-text-field name="last_name" label="Last name" />
                <x-text-field name="first_name" label="First name" />
                <x-text-field name="middle_name" label="Middle name" />
                <x-text-field name="gender" label="Gender"/>    
                <x-text-field name="birth_date" label="Birth date"/>    
                <x-text-field name="address" label="Address"/>    
                <x-text-field name="phone" label="Phone"/>    

                <x-primary-button type="submit">{{__('Create')}}</x-primary-button>
            </div>

//'php artisan make:view components.text-field'

        //errors list 
        @if ($errors->any())
            <div class="alert alert-danger text-red-500">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </form>
</x-app-layout>