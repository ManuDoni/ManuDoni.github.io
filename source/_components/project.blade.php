<div class="border-2 border-white rounded-md hover:border-[#fd8360] [&:hover_h3]:bg-[#fd8360] [&:hover_h3]:text-white {{ $class }}">
    @if($url)
    <a href="{{ $url }}" {{ isset($external) ? 'target="_blank" rel="noopener noreferrer"' : '' }}>
        @endif
        <h3 class="flex flex-row items-center justify-center px-4 py-2 mx-auto -mb-1 font-bold text-center bg-white text-cyan-900">
            <span>{{ $title }}</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 ml-2 fill-current" width="24" height="24" viewBox="0 0 24 24"><path d="M21 13v10h-21v-19h12v2h-10v15h17v-8h2zm3-12h-10.988l4.035 4-6.977 7.07 2.828 2.828 6.977-7.07 4.125 4.172v-11z"/></svg>
        </h3>
        @if($url)
    </a>
    @endif
    @if($slot->isNotEmpty())
    <p class="px-4 py-2 text-center">{{ $slot }}</p>
    @endif
</div>