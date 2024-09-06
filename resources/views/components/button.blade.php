@props(['href' => '', 'type' => 'button', 'color' => 'blue'])
<a href="{{ $href }}" type="{{ $type }}" class="text-white font-bold bg-gradient-to-r from-{{ $color }}-500 via-{{ $color }}-600 to-{{ $color }}-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-{{ $color }}-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
    {{ $slot }}
</a>