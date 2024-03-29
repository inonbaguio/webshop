<x-nav-link href="{{ route('cart') }}" :active="request()->routeIs('dashboard')">
    {{ __('Your cart') }} ({{ $this->count }})
</x-nav-link>
