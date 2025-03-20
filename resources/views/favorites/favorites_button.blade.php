@if (Auth::user()->is_favorite($micropost->id))
    <div>
        {{-- アンフェイバリットボタンのフォーム --}}
        <form method="POST" action="{{ route('favorites.unfavorite', $micropost->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-warning btn-sm normal-case">Unfavorite</button>
        </form>
    </div>
    @else
    <div>
        {{-- お気に入りボタンのフォーム --}}
        <form method="POST" action="{{ route('favorites.favorite', $micropost->id) }}">
            @csrf
            <button type="submit" class="btn btn-success btn-sm normal-case">Favorite</button>
        </form>
    </div>
@endif
