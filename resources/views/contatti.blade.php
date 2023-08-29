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

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif


                        <form action="{{ route('invia') }}" method="POST">
                            @csrf
                            <!--action: dove deve andare? method POST quindi nascosto-->
                            <!--nome-->
                            <div class="mb-3">
                                <label class="form-label ">Nome</label>
                                <input class="form-control" value="{{ old('nome') }}" type="text" name="nome"
                                    placeholder="Nome" />
                                @error('nome')
                                    <span style="color: red">
                                        Errore - nome obbligatorio!
                                    </span>
                                @enderror
                            </div>

                            <!--email-->
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input class="form-control" type="email" value="{{ old('email') }}" name="email"
                                    placeholder="Email" />
                                @error('email')
                                    <span style="color: red">
                                        Errore - formato e-mail obbligatorio!
                                    </span>
                                @enderror
                            </div>
                            <!--textarea -->
                            <div class="mb-3">
                                <label class="form-label">Messaggio</label>
                                <textarea class="form-control  " type="text" name="messaggio" placeholder="Messaggio" style="height: 10rem;">{{ old('messaggio') }}</textarea>
                                @error('messaggio')
                                    <span style="color: red">
                                        Errore min-10!
                                    </span>
                                @enderror
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
