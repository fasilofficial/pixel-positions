@props(['tag', 'size' => 'base',])

@php
    $classes = "bg-white/10 rounded font-bold hover:bg-white/25 transition-colors duration-300";

    if ($size === 'base') {
        $classes .= " px-5 py-1 text-sm";
    } else if ($size === 'small') {
        $classes .= " px-3 py-1 text-2xs";
    }
@endphp

<a class="{{ $classes }}">{{ $tag->name }}</a>
