<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('posts.index')}}">MainPage</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                @if($user)
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('posts.create') }}">Создать новый
                            пост</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">Выйти</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">{{ $user->name }} id: {{ Auth::user()->id  }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Ваших постов: {{ $user->posts->count() }} </a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register.create') }}">Зарегестрироватсья</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('show_login') }}">Войти</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
