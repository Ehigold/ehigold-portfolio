@props(['status', 'title'=>''])

@if ($status)
<div {{ $attributes->merge(['class' =>' rounded-lg']) }} role="alert">
    <span class="font-medium">{{ $title??'' }}</span>  {{ $status }}
    </div>
@endif

