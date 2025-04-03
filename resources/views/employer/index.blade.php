<x-layout>
    <x-slot:heading>
        Employers
    </x-slot:heading>

    <div class="overflow-hidden bg-white shadow sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">
                    Name
                </th>
                <th scope="col" class="px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">
                    Jobs count
                </th>
                <th scope="col" class="px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">
                    Actions
                </th>
            </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
            @forelse ($employers as $employer)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        {{ $employer->name }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                    {{ $employer->jobs_count ?? 0 }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <a href="{{ route('employers.show', $employer->id) }}"
                           class="text-indigo-600 hover:text-indigo-900">View</a> |
                        <a href="{{ route('employers.edit', $employer->id) }}"
                           class="text-yellow-600 hover:text-yellow-900">Edit</a>
                        @if ($employer->jobs_count <= 0)
                        |
                        <form action="{{ route('employers.destroy', $employer->id) }}" method="POST"
                              style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900"
                                    onclick="return confirm('Are you sure you want to delete this employer?');">Delete
                            </button>
                        </form>
                            @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                        No employers found.
                    </td>
                </tr>
            @endforelse
            </tbody>
        </table>

        <div class="p-4">
            {{ $employers->links() }}
        </div>
    </div>
</x-layout>
