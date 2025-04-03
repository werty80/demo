<x-layout>
    <form action="{{ route('houses.store') }}" method="POST">
        @csrf

        <div>
            <label for="village">Select Village:</label>
            <select name="village_id" id="village" required>
                <option value="">-- Select a Village --</option>
                @foreach($villages as $village)
                    <option value="{{ $village->id }}">{{ $village->name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="name">House Name:</label>
            <input type="text" name="name" id="name" required />
        </div>

        <button type="submit">Add House</button>
    </form>
</x-layout>
