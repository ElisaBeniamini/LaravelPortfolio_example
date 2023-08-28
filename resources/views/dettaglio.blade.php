<x-layout>
    <x-slot name="title">
        Dettaglio Servizio {{ $service['name'] }}
    </x-slot>
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <x-navbar />

        <div class="container-fluid align-content-center text-center mt-5 bg-primary bg-gradient-primary-to-secondary">

            <div class="row ">
                <div class="col-12 col-md-12  ">
                    <h2 class="mb-5 my-2 text-white">Scopri di piu su : {{ $service['name'] }}</h2>
                </div>
            </div>
            <div class="row d-flex justify-content-center">

                <div class="col-12 col-md-6 d-flex justify-content-center ">

                    <x-card :service="$service['name']" :costo="$service['costo']" :tempoconsegna="$service['tempo_di_realizzazione']" :route="Route('contatti')" :textbutton="'Contattaci subito'" />
                </div>
            </div>

            <div class=" row align-content-center fs-2 w-80 h-80 text-center rounded-1">

                <div class="col-12 col-md-12">
                    <h1 class="text-white fs-1">Dettagli</h1>
                    <span class="text-white"> adipisicing elit.
                        Similique
                        neque sequi et
                        ratione
                        consectetur eveniet quaerat dolorum blanditiis quam iure sit, error, saepe, quisquam nihil
                        dolore
                        repellat
                        nemo ab fugiat!adipisicing elit.
                        Similique. Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic quae ab, quam
                        repudiandae itaque iusto, ut blanditiis praesentium quaerat voluptatem impedit. Qui deserunt
                        magnam ad officiis voluptate. Sit, adipisci optio.
                    </span>
                </div>
            </div>





        </div>





        <!-- Footer-->
        <x-footer />
    </main>
</x-layout>
