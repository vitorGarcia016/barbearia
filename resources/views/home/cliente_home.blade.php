@extends('layout.main_layout')
@section('title', 'Cliente')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/home-cliente.css') }}">
@endsection

@section('content')


    <x-home.home-nav-bar />

    <main class="container py-5">


        <x-home.home-panel>
            <x-slot name="title">
                Painel do Cliente
            </x-slot>

            <x-slot name="text">
                Gerencie seus agendamentos com facilidade.
            </x-slot>
        </x-home.home-panel>

        <div class="row g-4">


            <div class="col-12 col-md-6 col-lg-4">
                <a href="" class="text-decoration-none text-dark">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <div class="icon-box text-primary mb-3"><i class="bi bi-calendar-plus"></i></div>
                            <h5 class="card-title">Agendamento</h5>
                            <p class="card-text text-muted">Faça o seu agendamento.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <a href="" class="text-decoration-none text-dark">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <div class="icon-box text-warning mb-3"><i class="bi bi-people"></i></div>
                            <h5 class="card-title">Cortes Agendados</h5>
                            <p class="card-text text-muted">Veja seus agendamentos marcados.</p>
                        </div>
                    </div>
                </a>
            </div>


            <div class="col-12 col-md-6 col-lg-4">
                <a href="" class="text-decoration-none text-dark">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <div class="icon-box text-secondary mb-3"><i class="bi bi-clock-history"></i></div>
                            <h5 class="card-title">Histórico</h5>
                            <p class="card-text text-muted">Atendimentos já realizados.</p>
                        </div>
                    </div>
                </a>
            </div>


            <div class="col-12 col-md-6 col-lg-4">
                <a href="" class="text-decoration-none text-dark">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <div class="icon-box text-info mb-3"><i class="bi bi-person"></i></div>
                            <h5 class="card-title">Meu Perfil</h5>
                            <p class="card-text text-muted">Atualize suas informações.</p>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </main>

@endsection
