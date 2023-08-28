<div class="card cardtitlecss col-12 col-md-3 mb-5 mx-3 " style="width: 19rem; height:22rem;">
    <div class="card-body ">
        <h5 class="card-title fs-3 text-primary fw-bold ">{{ $service }}</h5>
        <div
            class=" fs-4 mt-5  bg-primary bg-gradient-primary-to-secondary bg-opacity-3 text-white rounded p-0 d-flex flex-column justify-content-center ">
            <p>Costo : {{ $costo }}</p>
            <p>Tempo di consegna: <br> {{ $tempoconsegna }}</p>

        </div>

        <a href="{{ $route }}" class="btn btn-outline-primary mt-2">{{ $textbutton }}</a>


    </div>
    <div class="d-flex justify-content-center">
    </div>
</div>
