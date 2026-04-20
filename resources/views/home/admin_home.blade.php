@extends('layout.main_layout')
@section('title', 'Admin')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/home-admin.css') }}">
@endsection

@section('content')


    <x-home.home-nav-bar />

    <main class="container py-5">

    <x-home.home-panel>
        <x-slot name="title">
            Painel Administrativo
        </x-slot>

        <x-slot name="text">
            Acompanhe e gerencie todas as operações do sistema.
        </x-slot>
    </x-home.home-panel>

    <div class="row g-4">

        
        <div class="col-12 col-md-6 col-lg-4">
            <a href="" class="text-decoration-none text-dark">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">
                        <div class="icon-box text-secondary mb-3">
                            <i class="bi bi-journal-text"></i>
                        </div>
                        <h5 class="card-title">Logs do Sistema</h5>
                        <p class="card-text text-muted">Visualize o histórico de atividades e eventos.</p>
                    </div>
                </div>
            </a>
        </div>

        
        <div class="col-12 col-md-6 col-lg-4">
            <a href="" class="text-decoration-none text-dark">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">
                        <div class="icon-box text-success mb-3">
                            <i class="bi bi-person-check"></i>
                        </div>
                        <h5 class="card-title">Usuários Online</h5>
                        <p class="card-text text-muted">Acompanhe os usuários ativos no sistema.</p>
                    </div>
                </div>
            </a>
        </div>

        
        <div class="col-12 col-md-6 col-lg-4">
            <a href="" class="text-decoration-none text-dark">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">
                        <div class="icon-box text-dark mb-3">
                            <i class="bi bi-scissors"></i>
                        </div>
                        <h5 class="card-title">Barbeiros</h5>
                        <p class="card-text text-muted">Gerencie os profissionais da barbearia.</p>
                    </div>
                </div>
            </a>
        </div>

        
        <div class="col-12 col-md-6 col-lg-4">
            <a href="" class="text-decoration-none text-dark">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">
                        <div class="icon-box text-primary mb-3">
                            <i class="bi bi-person"></i>
                        </div>
                        <h5 class="card-title">Clientes</h5>
                        <p class="card-text text-muted">Gerencie o cadastro de clientes.</p>
                    </div>
                </div>
            </a>
        </div>

        
        <div class="col-12 col-md-6 col-lg-4">
            <a href="" class="text-decoration-none text-dark">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">
                        <div class="icon-box text-warning mb-3">
                            <i class="bi bi-calendar-event"></i>
                        </div>
                        <h5 class="card-title">Agendamentos</h5>
                        <p class="card-text text-muted">Gerencie horários e atendimentos.</p>
                    </div>
                </div>
            </a>
        </div>

        
        <div class="col-12 col-md-6 col-lg-4">
            <a href="" class="text-decoration-none text-dark">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">
                        <div class="icon-box text-info mb-3">
                            <i class="bi bi-person-circle"></i>
                        </div>
                        <h5 class="card-title">Meu Perfil</h5>
                        <p class="card-text text-muted">Atualize suas informações pessoais.</p>
                    </div>
                </div>
            </a>
        </div>

    </div>
</main>

@endsection

