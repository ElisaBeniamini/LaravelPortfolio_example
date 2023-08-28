<x-layout>
    <x-slot name="title">
        Servizi Offerti
    </x-slot>
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <x-navbar />

        <!-- header-gradient-->
        <div class="container-fluid align-content-center text-center mt-5 bg-primary bg-gradient-primary-to-secondary">
            <div class="row ">
                <div class="col-12 col-md-12  ">
                    <h2 class="mb-5 my-2 text-white">Servizi Offerti</h2>
                </div>
            </div>

            <div class="row text-center d-flex   justify-content-center align-items-center ">

                @foreach ($services as $service)
                    <x-card :service="$service['name']" :costo="$service['costo']" :tempoconsegna="$service['tempo_di_realizzazione']" :textbutton="'Dettaglio servizio'" :route="Route('dettaglio', [$service['uri']])" />
                @endforeach
            </div>
        </div>

        <!-- Footer-->
        <x-footer />
    </main>


</x-layout>
