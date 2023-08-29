<x-layout>
    <x-slot name="title">
        Contatti
    </x-slot>
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <x-navbar />
        <!-- Page content-->
        <section class="py-5 bg-primary bg-gradient-primary-to-secondary  d-flex justify-content-center ">
            <div class="container px-5">
                <!-- Header Form-->
                <div class="bg-light rounded-4 py-5 px-4 px-md-5">
                    <div class="text-center mb-5">
                        <div class="feature bg-primary  text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                        <h1 class="fw-bolder">Get in touch</h1>
                        <p class="lead fw-normal text-muted mb-0">Let's work together!</p>
                    </div>
                    <!--FORM-->
                    <div class=" py-4">
                        <form action="{{ route('invia') }}" method="POST">
                            @csrf
                            <!--action: dove deve andare? method POST quindi nascosto-->
                            <!--nome-->
                            <div class="mb-3">
                                <label class="form-label ">Nome</label>
                                <input class="form-control " type="text" name="nome" placeholder="Nome" />
                            </div>

                            <!--email-->
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input class="form-control" type="email" name="email" placeholder="Email" />
                            </div>
                            <!--textarea -->
                            <div class="mb-3">
                                <label class="form-label">Messaggio</label>
                                <textarea class="form-control" type="text" name="messaggio" placeholder="Messaggio" style="height: 10rem;"></textarea>
                            </div>

                            <!--Button Invio-->
                            <div class="d-grid ">
                                <button type="submit" class="btn btn-outline-primary">Invia</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </section>

        <!-- Footer-->

    </main>
    <x-footer />
</x-layout>
