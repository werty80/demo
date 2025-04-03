@props(['active'=>false])
<a class="{{ $active ? ' text-white': 'text-blue-500 underline hover:text-blue-700'}} rounded-md px-3 py-2 font-medium"
   aria-current="{{ $active ? 'page': 'false'}} "
   {{$attributes}}
>{{$slot}}</a>
