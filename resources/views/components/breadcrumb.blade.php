@props(['items'])

<nav class="breadcrumb" aria-label="breadcrumb">
    <ol class="breadcrumb-list flex space-x-2">
        @foreach ($items as $item)
            <li>
                @if (!$loop->last)
                    <a href="{{ $item['url'] }}" class="text-blue-500 hover:underline">{{ $item['label'] }}</a>
                    <span class="mx-1 text-gray-400">/</span>
                @else
                    <span class="text-gray-700">{{ $item['label'] }}</span>
                @endif
            </li>
        @endforeach
    </ol>
</nav>
