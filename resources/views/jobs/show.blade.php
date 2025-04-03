<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>


    <x-slot:action>
        <a href="/jobs" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"> Jobs</a>

    </x-slot:action>
    <h2 class="font-bold text-lg">{{$job['title']}}</h2>

    <p>
        This job pays {{$job['salary']}} per year.
    </p>

    <p class="mt-6">
        <a href="/jobs" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
        >Return</a>
        <a href="/jobs/{{ $job->id }}/edit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
        >Edit Job</a>
    </p>
</x-layout>
