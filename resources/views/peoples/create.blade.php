<x-layout>
    <x-slot:heading>
        Add People
    </x-slot:heading>

    <form method="POST" action="/peoples">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="name" class="block text-sm/6 font-medium text-gray-900">Name</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <input type="text"
                                       name="name"
                                       id="name"
                                       class="block min-w-0 grow py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                                       value="{{ $people->name }}"
                                       required>
                            </div>
                            @error('name')
                            <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="house_id" class="block text-sm/6 font-medium text-gray-900">House Id</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <input type="text"
                                       name="house_id"
                                       id="house_id"
                                       class="block min-w-0 grow py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                                       value="{{ $people->house_id }}"
                                       required>
                            </div>
                            @error('house_id')
                            <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="email" class="block text-sm/6 font-medium text-gray-900">Email</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <input type="email"
                                       name="email"
                                       id="email"
                                       class="block min-w-0 grow py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                                       value="{{ $people->email }}"
                                       required>
                            </div>
                            @error('email')
                            <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="phone" class="block text-sm/6 font-medium text-gray-900">Phone Number</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <input type="text"
                                       name="phone"
                                       id="phone"
                                       class="block min-w-0 grow py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                                       value="{{ $people->phone }}"
                                       required>
                            </div>
                            @error('phone')
                            <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="gender" class="block text-sm/6 font-medium text-gray-900">Gender</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <input type="text"
                                       name="gender"
                                       id="gender"
                                       class="block min-w-0 grow py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                                       value="{{ $people->gender }}"
                                       required>
                            </div>
                            @error('gender')
                            <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="date_of_birth" class="block text-sm/6 font-medium text-gray-900">Date of Birth</label>
                        <div class="mt-2">
                            <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <input type="text"
                                       name="date_of_birth"
                                       id="date_of_birth"
                                       class="block min-w-0 grow py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                                       value="{{ $people->date_of_birth }}"
                                       required
                                >
                            </div>
                            @error('date_of_birth')
                            <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="address" class="block text-sm/6 font-medium text-gray-900">Address</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <input type="text"
                                       name="address"
                                       id="address"
                                       class="block min-w-0 grow py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                                       value="{{ $people->address }}"
                                       required>
                            </div>
                            @error('address')
                            <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="nationality" class="block text-sm/6 font-medium text-gray-900">Nationality</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <input type="text"
                                       name="nationality"
                                       id="nationality"
                                       class="block min-w-0 grow py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                                       value="{{ $people->nationality }}"
                                       required>
                            </div>
                            @error('nationality')
                            <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="status" class="block text-sm/6 font-medium text-gray-900">Status</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <input type="text"
                                       name="status"
                                       id="status"
                                       class="block min-w-0 grow py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                                       value="{{ $people->status }}"
                                       required>
                            </div>
                            @error('status')
                            <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-6 flex items-center justify-between gap-x-6">
                <div class="flex items-center">
                    <button form="delete-form" class="text-red-500 text-sm font-bold">Delete</button>
                </div>

                <div class="flex items-center gap-x-6">
                    <a href="javascript:history.back()"
                       class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Cancel
                    </a>
                    <div>
                        <button type="submit"
                                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            Create
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</x-layout>
