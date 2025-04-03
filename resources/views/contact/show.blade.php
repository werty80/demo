<x-layout>
    <x-slot:heading>
        Contact Details
    </x-slot:heading>

    <x-slot:action>
        <div>
            <a href="/contacts"
               class="rounded-md bg-blue-500 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-blue-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-yellow-500"
            >Contacts</a>
            <a href="{{ route('contacts.edit', $contact->id) }}"
               class="rounded-md bg-yellow-500 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-yellow-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-yellow-500"
            >Edit Contact</a>
            <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-red-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-500"
                        onclick="return confirm('Are you sure you want to delete this contact?');"
                >Delete Contact</button>
            </form>
        </div>
    </x-slot:action>

    <div class="overflow-hidden bg-white shadow sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg font-medium leading-6 text-gray-900">Contact Information</h3>
        </div>
        <div class="border-t border-gray-200 px-4 py-5 sm:p-6">
            <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
                <div>
                    <dt class="text-sm font-medium text-gray-500">Name</dt>
                    <dd class="mt-1 text-sm text-gray-900">{{ $contact->name }}</dd>
                </div>
                <div>
                    <dt class="text-sm font-medium text-gray-500">Email</dt>
                    <dd class="mt-1 text-sm text-gray-900">{{ $contact->email }}</dd>
                </div>
                <div>
                    <dt class="text-sm font-medium text-gray-500">Phone</dt>
                    <dd class="mt-1 text-sm text-gray-900">{{ $contact->phone ?? '-' }}</dd>
                </div>
                <div>
                    <dt class="text-sm font-medium text-gray-500">Address</dt>
                    <dd class="mt-1 text-sm text-gray-900">{{ $contact->address ?? '-' }}</dd>
                </div>
                <div>
                    <dt class="text-sm font-medium text-gray-500">City</dt>
                    <dd class="mt-1 text-sm text-gray-900">{{ $contact->city ?? '-' }}</dd>
                </div>
                <div>
                    <dt class="text-sm font-medium text-gray-500">State</dt>
                    <dd class="mt-1 text-sm text-gray-900">{{ $contact->state ?? '-' }}</dd>
                </div>
                <div>
                    <dt class="text-sm font-medium text-gray-500">Zipcode</dt>
                    <dd class="mt-1 text-sm text-gray-900">{{ $contact->zipcode ?? '-' }}</dd>
                </div>
                <div>
                    <dt class="text-sm font-medium text-gray-500">Country</dt>
                    <dd class="mt-1 text-sm text-gray-900">{{ $contact->country ?? '-' }}</dd>
                </div>
                <div>
                    <dt class="text-sm font-medium text-gray-500">Notes</dt>
                    <dd class="mt-1 text-sm text-gray-900">{{ $contact->notes ?? '-' }}</dd>
                </div>
            </dl>
        </div>
    </div>
</x-layout>
