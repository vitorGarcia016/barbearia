@extends('layout.main_layout')
@section('title', 'cadastro')
@section('css')

    <link rel="stylesheet" href="{{ asset('assets/css/cadastro.css') }}">

@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow-lg p-4">

                    <h3 class="text-center mb-4">Criar Conta</h3>

                    <form action="{{ route('registerSubmit') }}" method="POST" novalidate>
                        @csrf


                        <div class="mb-3">
                            <label class="form-label">Nome</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control" name="name" placeholder="Seu nome" required>
                            </div>
                        </div>
                        @error('name')
                            <div class="error-message text-danger">
                                <ul>
                                    <li>
                                        <p>{{ $message }}</p>
                                    </li>
                                </ul>
                            </div>
                        @enderror

                        <div class="mb-3">
                            <label class="form-label">CPF</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa fa-id-card""></i></span>
                                <input type="text" class="form-control" name="cpf" placeholder="Seu CPF" required>
                            </div>
                        </div>
                        @error('cpf')
                            <div class="error-message text-danger">
                                <ul>
                                    <li>
                                        <p>{{ $message }}</p>
                                    </li>
                                </ul>
                            </div>
                        @enderror


                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                <input type="email" class="form-control" name="email" placeholder="Seu email" required>
                            </div>
                        </div>
                        @error('email')
                            <div class="error-message text-danger">
                                <ul>
                                    <li>
                                        <p>{{ $message }}</p>
                                    </li>
                                </ul>
                            </div>
                        @enderror

                        <div class="mb-3">
                            <label class="form-label">Data de Nascimento</label>

                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fa fa-calendar"></i>
                                </span>

                                <input type="date" class="form-control" name="birthdate" max="{{ date('Y-m-d') }}"
                                    required>
                            </div>
                        </div>
                        @error('birthdate')
                            <div class="error-message text-danger">
                                <ul>
                                    <li>
                                        <p>{{ $message }}</p>
                                    </li>
                                </ul>
                            </div>
                        @enderror


                        <div class="mb-3">
                            <label class="form-label">Senha</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa fa-lock"></i></span>
                                <input type="text" class="form-control" name="password" placeholder="Senha" required>
                            </div>
                        </div>
                        @error('password')
                            <div class="error-message text-danger">
                                <ul>
                                    <li>
                                        <p>{{ $message }}</p>
                                    </li>
                                </ul>
                            </div>
                        @enderror


                        <div class="mb-3">
                            <label class="form-label">Confirmar Senha</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa fa-lock"></i></span>
                                <input type="text" class="form-control" name="password_confirmation"
                                    placeholder="Confirme a senha" required>
                            </div>
                        </div>
                        @error('password_confirmation')
                            <div class="error-message text-danger">
                                <ul>
                                    <li>
                                        <p>{{ $message }}</p>
                                    </li>
                                </ul>
                            </div>
                        @enderror


                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">
                                Cadastrar
                            </button>
                        </div>

                    </form>

                    <p class="text-center mt-3">
                        Já tem conta? <a href="{{ route('login') }}">Login</a>
                    </p>

                </div>
            </div>
        </div>
    </div>
@endsection
