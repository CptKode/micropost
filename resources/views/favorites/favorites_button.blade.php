@if (Auth::id() != $user->id)
    @if (Auth::user()->is_favorite($user->id))
        {{-- タンのフォーム --}}
        <form method="POST" action="{{ route('user.unfavorite', $user->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-error btn-block normal-case"
                onclick="return confirm('id = {{ $user->id }} を外します。よろしいですか？')">Unfavorite</button>
        </form>
    @else
        {{-- タンのフォーム --}}
        <form method="POST" action="{{ route('user.favorite', $user->id) }}">
            @csrf
            <button type="submit" class="btn btn-primary btn-block normal-case">Favorite</button>
        </form>
    @endif
@endif