<x-layout>
    <form action="/jobs" method="POST">
        {{-- we use @csrf to make sure the input is submit from this website --}}
        @csrf 
        <div>
        <input type="text" name="title" placeholder="title" value="{{old('title')}}">
         @error('title')
         <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
         @enderror
        </div>
        <div>
        <input type="text" name="description" placeholder="description" value="{{old('description')}}">
        @error('description')
        <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
        @enderror
        </div>
        <button type="submit">Submit</button>
    </form>
</x-layout>