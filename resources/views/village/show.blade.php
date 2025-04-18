<x-layout>
    <x-slot:heading>
        Village Details
    </x-slot:heading>

    <x-slot:action>
        <div>
            <a href="/islands"
               class="rounded-md bg-blue-500 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-blue-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-yellow-500"
            >Return</a>
        </div>
    </x-slot:action>
    <x-breadcrumb :items="$breadcrumb"/>
    <div class="overflow-hidden bg-white shadow sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg font-medium leading-6 text-gray-900">Village Information</h3>
        </div>
        <div class="border-t border-gray-200 px-4 py-5 sm:p-6">
            <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
                <div>
                    <dt class="text-sm font-medium text-gray-500">Name</dt>
                    <dd class="mt-1 text-sm text-gray-900">{{ $village->name }}</dd>
                </div>
                <div>
                    <dt class="text-sm font-medium text-gray-500">Code</dt>
                    <dd class="mt-1 text-sm text-gray-900">{{ $village->code }}</dd>
                </div>
            </dl>
        </div>
    </div>

    <hr class="bg-gray-500 my-5"/>
    <div class="my-5">
        <div class="flex justify-between">
            <h3 class="text-lg font-medium leading-6 text-gray-900">Houses</h3>
            <div>
                <a href="{{ route('houses.create', ['village'=>$village->id]) }}"
                   class="rounded-md bg-green-500 px-3 py-1 text-sm font-semibold text-white shadow-xs hover:bg-green-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-500"
                >Add House</a>
            </div>
        </div>
    </div>

    <div class="overflow-hidden bg-white shadow sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
               <tr>
                  <th scope="col" class="px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">
                    Name
                  </th>
                  <th scope="col" class="px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">
                    House count
                  </th>
                  <th scope="col" class="px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">
                    Actions
                  </th>
               </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
            @forelse ($village->houses as $house)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        {{ $house->name }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        {{ $house->house_count ?? 0 }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <a href="{{ route('houses.details', ['island' => $village->island_id,'village' => $house->village_id, 'house' => $house->id]) }}"
                           class="text-indigo-600 hover:text-indigo-900">View</a> |
                        <a href="{{ route('houses.edit', $house->id) }}"
                           class="text-yellow-600 hover:text-yellow-900">Edit</a>
                        @if ($house->jobs_count <= 0)
                            |
                            <form action="{{ route('houses.destroy', $house->id) }}" method="POST"
                                  style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900"
                                        onclick="return confirm('Are you sure you want to delete this employer?');">
                                    Delete
                                </button>
                            </form>
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                        No houses found.
                    </td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
</x-layout>
