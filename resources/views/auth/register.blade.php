@extends('base')

@section('content')
    <form action="{{ route('register.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input name="name" type="text" class="form-control" id="name">
        </div>
        <div class="mb-3">
            <label for="mail" class="form-label">Email address</label>
            <input name="email"  type="email" class="form-control" id="mail" placeholder="name@example.com">
        </div>
        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label for="inputPassword6" class="col-form-label">Password</label>
            </div>
            <div class="col-auto">
                <input name="password"  type="password" id="inputPassword6" class="form-control" aria-labelledby="passwordHelpInline">
            </div>
        </div>
        <button type="submit">Зарегистрироваться</button>

    </form>

@endsection
