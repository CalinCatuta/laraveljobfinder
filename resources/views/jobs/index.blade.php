<x-layout>
    <h1>Jobs</h1>
    <ul>
        @forelse ($jobs as $job)
        {{-- bcs we use Eloquent we change the sintax from {{$job['title']}} to $job->title --}}
            <li>{{$job->title}} -  {{$job->description}}</li>
        @empty
            <li>No jobs</li>
        @endforelse
    </ul>
</x-layout>