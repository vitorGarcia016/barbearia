@extends('layout.main_layout')
@section('title', 'Home')

@section('content')

    <header>
        <x-home.home-nav-bar />
    </header>

    <section>
        <div style="height: 650px;">
            <img src="{{ asset('assets/images/imagemTopo.jpg') }}"
                class="img-fluid h-100 w-100 object-fit-cover" alt="imagemTopo" style="filter: brightness(60%);">
        </div>
    </section>

    <section>
        <x-home.home-products />
    </section>

    <hr>

    <section id="about" class="py-5 bg-light">
        <div class="container text-center">
            <h2 class="fw-bold mb-3">Sobre Nós</h2>
            <p class="text-muted mx-auto" style="max-width: 700px; line-height: 1.8;">
                Na <strong>Barbearia MV</strong>, não é só sobre cortar cabelo — é sobre elevar sua presença.
                Trabalhamos com cortes modernos e clássicos, sempre focando nos detalhes que fazem a diferença
                no seu estilo e na sua confiança.
            </p>

            <p class="text-muted mx-auto" style="max-width: 700px; line-height: 1.8;">
                Nosso ambiente foi pensado para oferecer conforto, qualidade e um atendimento de alto nível.
                Mais do que uma barbearia, somos um espaço onde você vem para se cuidar, relaxar e sair no padrão.
            </p>
        </div>
    </section>

    <footer>
        <x-home.home-footer />
    </footer>

@endsection