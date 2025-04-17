@props(['items'])

<nav class="breadcrumb py-3 px-4 bg-gray-50 rounded-md shadow-sm" aria-label="breadcrumb">
    <ol class="breadcrumb-list flex flex-wrap space-x-2 items-center">
        @foreach ($items as $item)
            <li class="flex items-center">
                @if (!$loop->last)
                    <a href="{{ $item['url'] }}" class="text-blue-600 font-medium hover:text-blue-800 hover:underline">
                        {{ $item['label'] }}
                    </a>
                    <svg class="h-4 w-4 mx-1 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path fill-rule="evenodd" d="M8.53 3.47a.75.75 0 011.06 0l7.25 7.25a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 11-1.06-1.06L15.94 12 8.53 4.53a.75.75 0 010-1.06z" clip-rule="evenodd"/>
                    </svg>
                @else
                    <span class="text-gray-700 font-semibold">{{ $item['label'] }}</span>
                @endif
            </li>
        @endforeach
    </ol>
</nav>
