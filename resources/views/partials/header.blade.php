<header class="bg-white text-dark">
    <div class="container d-flex justify-content-between align-items-center">
        <div  id="logo">
            <a href="{{ route('comics') }}">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
            </a>
        </div>
        <nav class="d-flex justify-content-between align-items-center">
            @foreach ($links as $link)
                <a 
                href="{{ $link['url'] === '#nogo' ? '#nogo' : route($link['url']) }}"
                class="{{ $link['active'] ? 'active mx-2' : 'mx-2' }}"
                >
                    {{ $link['label'] }}
                    @if ($link['selectIcon'])
                        <i class="fa-solid fa-caret-down mx-1 text-primary"></i>
                    @endif
                </a>
            @endforeach
        </nav>
        
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search">
            <button type="button">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </div>
          
    </div>
</header>
