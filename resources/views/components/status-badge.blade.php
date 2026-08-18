@props(['status'])

@php
    $isActive = $status === 'Aktif';

    $classes = $isActive
        ? 'bg-green-100 text-green-700'
        : 'bg-red-100 text-red-700';
@endphp

<span class="inline-block px-3 py-1 text-xs font-medium {{ $classes }}">
    {{ $status }}
</span>