<div class="border-2 border-white rounded-md {{ $class }}">
    @if($url)
    <a href="{{ $url }}" {{ isset($external) ? 'target="_blank" rel="noopener noreferrer"' : '' }}>
        @endif
        <div class="px-4 py-2 mx-auto -mb-1 font-bold text-center bg-white text-cyan-900 hover:text-white hover:bg-transparent">
            <span>{{ $title }}</span>
        </div>
        @if($url)
    </a>
    @endif
    @if($slot->isNotEmpty())
    <p class="px-4 py-2 text-center border-t-2 border-white rounded-md">{{ $slot }}</p>
    @endif
</div>