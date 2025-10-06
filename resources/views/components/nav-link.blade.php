@props(['route','title'])
<li>
    <a href="{{ route($route) }}"
        class="{{ request()->routeIs($route) ? 'active' : '' }}"
    >
        {{ Str::title($title) }}
    </a>
    {{ $slot }}
</li>
