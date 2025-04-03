<x-layout>
    <x-slot:heading>
        Job listings
    </x-slot:heading>

    <x-slot:action>
        <a href="/jobs/create" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create Job</a>
    </x-slot:action>

    <div class="space-y-4">
        @foreach ($jobs as $job)
                <a href="/jobs/{{$job['id']}}" class="block px-4 py-6 border border-gray-200 rounded-lg">
                    <div class="font-bold text-blue-500 text-sm">
                        {{ $job->employer ? $job->employer->name : 'No Employer' }}
                    </div>
                    <div>
                    <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year.
                </div>
                </a>
        @endforeach
        <div>
            {{ $jobs->links() }}
        </div>
    </div>
</x-layout>
