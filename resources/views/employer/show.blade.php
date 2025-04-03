<x-layout>
    <x-slot:heading>
        {{ $employer->name }}
    </x-slot:heading>

    <x-slot:action>
        <div>
            <a href="/employers"
               class="rounded-md bg-blue-500 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-blue-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-yellow-500"
            >Employers</a>
            <a href="{{ route('employers.edit', $employer->id) }}"
               class="rounded-md bg-yellow-500 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-yellow-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-yellow-500"
            >Edit Employer Info</a>
            <form action="{{ route('employers.destroy', $employer->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit"
                        class="rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-red-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-500"
                        onclick="return confirm('Are you sure you want to delete this employer info?');"
                >Delete Employer Info
                </button>
            </form>
        </div>
    </x-slot:action>

    <div class="mt-5">
        <div class="flex justify-between">
            <h3 class="text-lg font-medium leading-6 text-gray-900">Jobs</h3>
            <div>
                <a href="{{ route('jobs.create', ['employer'=>$employer->id]) }}"
                   class="rounded-md bg-green-500 px-3 py-1 text-sm font-semibold text-white shadow-xs hover:bg-green-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-500"
                >Add Job</a>
            </div>
        </div>

    </div>

    <div class="overflow-hidden bg-white shadow sm:rounded-lg mt-2">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">
                    Job Title
                </th>
                <th scope="col" class="px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">
                    Salary
                </th>
                <th scope="col" class="px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">
                    Actions
                </th>
            </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
            @forelse ($employer->jobs as $job)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        {{ $job->title}}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        {{ $job->salary }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <a href="{{ route('jobs.show', $job->id) }}"
                           class="text-indigo-600 hover:text-indigo-900">View</a> |
                        <a href="{{ route('jobs.edit', $job->id) }}"
                           class="text-yellow-600 hover:text-yellow-900">Edit</a> |
                        <form action="{{ route('jobs.destroy', $job->id) }}" method="POST"
                              style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900"
                                    onclick="return confirm('Are you sure you want to delete this employer?');">Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                        No employer info found.
                    </td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
</x-layout>
