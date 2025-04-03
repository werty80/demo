<x-layout>
    <x-slot:heading>
        Contact List
    </x-slot:heading>

    <x-slot:action>
        <a href="{{ route('contacts.create') }}"
           class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
            Create Contact
        </a>
    </x-slot:action>

    <div class="overflow-hidden bg-white shadow sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">
                    Name
                </th>
                <th scope="col" class="px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">
                    Email
                </th>
                <th scope="col" class="px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">
                    Phone
                </th>
                <th scope="col" class="px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">
                    Actions
                </th>
            </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
            @forelse ($contacts as $contact)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        {{ $contact->name }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        {{ $contact->email }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        {{ $contact->phone ?? '-' }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <a href="{{ route('contacts.show', $contact->id) }}" class="text-indigo-600 hover:text-indigo-900">View</a> |
                        <a href="{{ route('contacts.edit', $contact->id) }}" class="text-yellow-600 hover:text-yellow-900">Edit</a> |
                        <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900"
                                    onclick="return confirm('Are you sure you want to delete this contact?');">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                        No contacts found.
                    </td>
                </tr>
            @endforelse
            </tbody>
        </table>

        <div class="p-4">
            {{ $contacts->links() }}
        </div>
    </div>
</x-layout>
