@extends('layout.main_layout')
@section('title', 'Home')

@section('content')

    <x-home.home-nav-bar />

    <x-home.home-carousel />

    <hr>

    <x-home.home-products />

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


    <footer id="contacts" class="bg-dark text-center py-4">
        <div class="container">

            <p class="text-white mb-3 fw-light">
                © {{ date('Y') }} Barbearia MV - Todos os direitos reservados
            </p>

            <div class="d-flex justify-content-center gap-4">
                <a href="#" class="text-decoration-none">
                    <i class="fa-brands fa-whatsapp fs-3 text-success"></i>
                </a>

                <a href="#" class="text-decoration-none">
                    <i class="fa-brands fa-instagram fs-3"
                        style="
                        background: linear-gradient(45deg, #833AB4, #E1306C, #F77737, #FCAF45);
                        -webkit-background-clip: text;
                        -webkit-text-fill-color: transparent;
                    "></i>
                </a>

                <a href="#" class="text-decoration-none">
                    <i class="fa-brands fa-facebook-f fs-3 text-primary"></i>
                </a>
            </div>

        </div>
    </footer>

@endsection
