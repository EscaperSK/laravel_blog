@extends('base')

@section('content')
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">
        </div>
        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label for="password" class="col-form-label">Password</label>
            </div>
            <div class="col-auto">
                <input name="password" type="password" id="password" class="form-control">
            </div>

        </div>
        <button type="submit">Войти</button>

    </form>

@endsection
