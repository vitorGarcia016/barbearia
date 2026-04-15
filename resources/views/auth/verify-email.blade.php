@extends('layout.main_layout')
@section('titile', 'Verificação de Email')

@section('css')

    <link rel="stylesheet" href="{{ asset('assets/css/verify-email.css') }}">    

@endsection

@section('content')

    <div class="verify-container">
    <div class="verify-card">

        <div class="icon">
            <i class="fa fa-envelope"></i>
        </div>

        <h2>Verifique seu Email</h2>

        <p>
            Enviamos um link de verificação para o seu email.<br>
            Por favor, acesse sua caixa de entrada e clique no link.
        </p>

        @if (session('message'))
            <div class="alert-success">
                Um novo link foi enviado para seu email!
            </div>
        @endif

        <form method="POST" action="{{route('verification.send')}}">
            @csrf
            <button type="submit" class="btn-primary">
                Reenviar Email
            </button>
        </form>

    </div>
</div>


@endsection
