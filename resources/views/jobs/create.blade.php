<x-layout>
    <form action="/jobs" method="POST">
        {{-- we use @csrf to make sure the input is submit from this website --}}
        @csrf 
        <input type="text" name="title" placeholder="title">
        <input type="text" name="description" placeholder="description">
        <button type="submit">Submit</button>
    </form>
</x-layout>