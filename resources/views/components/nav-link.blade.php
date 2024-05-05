@props(['active' => false])
<!-- props is a blade directive of which there are many - endif dump etc -->

<!-- Attributes pulls in href, src, etc -->
@if (!$active)
<a {{ $attributes }} 
class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium" 
aria-current="{{ $active ? 'page' : 'false' }}">{{ $slot }}</a>
@else
<button {{ $attributes }} class="bg-blue-700 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded">
  {{ $slot }}
</button>
@endif
<!-- Attributes and props 
  Attributes are the HTML attributes that are passed to the component - href, src, etc.
  Props are the custom attributes that are passed to the component - active, etc.
-->

