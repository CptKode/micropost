@if (Auth::user()->is_favorite($user->id))
    <div>
        {{-- アンフェイバリットボタンのフォーム --}}
        <form method="POST" action="{{ route('favorites.unfavorite', $micropost->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-warning btn-sm normal-case"
                onclick="return confirm('id = {{ $micropost->id }} を外します。よろしいですか？')">Unfavorite</button>
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
