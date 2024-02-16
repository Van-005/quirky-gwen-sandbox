<div>
    <label for="{{$name}}" class="text-white shadow-sm">
        {{$label}}
    </label>
<input type="text" name="{{$name}}" id="{{$name}}" value="{{$value}}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 mt-2">

@error($name)
<span class="text-red-500">
    {{ $message }}
</span>
@enderror
</div>

