<div class="row position-relative">
    <div>
        <img src="{{ Storage::disk('admin')->url($restaurant->img_path) }}" class="square-img">
    </div>
    <div class="ml-3">
        <div class="mt-3 mb-3">
            <h3>
                <a href="{{ route('restaurants.show', $restaurant->id) }}" class="stretched-link">{{ $restaurant->name }}</a>
            </h3>
        </div>
        <div>
            <div>{{ $restaurant->pr_short }}</div>
            <div>{{ $restaurant->opentime }}</div>
            @if (!empty($restaurant->menus))
                <ul class="menu_images">
                    @foreach ($restaurant->menus as $menu)
                        <li class="item"><img src="{{ asset($menu->img_path) }}" class="square-img-s"></li>
                        @if ($loop->iteration>=7)
                            @break
                        @endif
                        @break($loop->iteration>=7)
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
</div>
