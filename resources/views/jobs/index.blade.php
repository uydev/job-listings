<x-layout>
    <x-slot:heading>
        Job Listings Page
    </x-slot:heading>
    <h1>Hello From Job Page</h1>
    <div class="space-y-4">
    @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-lg">
                <div class="font-bold text-blue-500 text-small">{{ $job->employer->name }}</div>
                <div>
                    <strong class="text-laracasts">{{$job['title']}}</strong>: Pays {{$job['salary']}} per year.
                </div>
            </a>
    @endforeach

    <div>
        {{ $jobs->links() }}
    </div>
    </div>
</x-layout>