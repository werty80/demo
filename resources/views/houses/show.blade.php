<x-layout>
    <x-slot:heading>
        House Details
    </x-slot:heading>

    <x-slot:action>
        <div>
            <a href="/islands"
               class="rounded-md bg-blue-500 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-blue-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-yellow-500"
            >Islands</a>
            <a href="{{ route('houses.edit', $house->id) }}"
               class="rounded-md bg-yellow-500 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-yellow-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-yellow-500"
            >Edit House Info</a>
            <form action="{{ route('houses.destroy', $house->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit"
                        class="rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-red-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-500"
                        onclick="return confirm('Are you sure you want to delete this house info?');"
                >Delete House Info
                </button>
            </form>
        </div>
    </x-slot:action>

    <div class="overflow-hidden bg-white shadow sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg font-medium leading-6 text-gray-900">House Information</h3>
        </div>
        <div class="border-t border-gray-200 px-4 py-5 sm:p-6">
            <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
                <div>
                    <dt class="text-sm font-medium text-gray-500">Name</dt>
                    <dd class="mt-1 text-sm text-gray-900">{{ $house->name }}</dd>
                </div>
            </dl>
        </div>
    </div>
</x-layout>
