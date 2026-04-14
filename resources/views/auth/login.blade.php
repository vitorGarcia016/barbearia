@extends('layout.main_layout')
@section('title', 'Login')
@section('css')

    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">

@endsection

@section('content')

    <div class="d-flex justify-content-center align-items-center vh-100 p-3">
        <div class="login-card">
            <h2 class="fw-bold text-center mb-4">Login</h2>

            <form action="{{ route('loginSubmit') }}" method="POST">
                @csrf
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                    <input type="email" class="form-control" placeholder="Email" name="email" value="{{old('email')}}" required>
                </div>
                @error('email')
                    <div class="error-message text-danger">
                        <ul>
                            <li><p>{{$message}}</p></li>
                        </ul>
                    </div>
                @enderror

                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                    <input type="password" class="form-control" placeholder="Senha" name="password" value="{{old('password')}}" required>
                </div>
                @error('password')
                    <div class="error-message text-danger">
                        <ul>
                            <li><p>{{$message}}</p></li>
                        </ul>
                    </div>
                @enderror

                <div class="d-flex justify-content-center align-items-center mb-3">
                    <div>
                        <input type="checkbox" class="form-check-input" id="remember">
                        <label class="form-check-label">Lembrar-me</label>
                    </div>

                    <a href="" class="text-white small text-decoration-none ms-4">Esqueceu a senha?</a>
                </div>

                <button class="btn btn-light w-100 text-dark fw-semibold">Entrar</button>

                <p> <a href="{{route('register')}}" class="text-white fw-semibold text-decoration-none">Não tem uma conta?</a> </p>

                @if (session('loginError'))

                    <div class="text-danger d-flex justify-content-center align-items-center"><p class="m-0">{{session('loginError')}}</p></div>
                    
                @endif

            </form>
        </div>
    </div>

@endsection
