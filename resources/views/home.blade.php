<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap');
    </style>
</head>

<body>

    @include('partials.header')
    <main>
        <div class="container my-5">
            <div class="row row-cols-1 row-cols-lg-2 g-3">
                @foreach($trains as $train)
                <div class="col">
                    <div class="card h-100 border-0 shadow bg-dark text-warning border-start border-4 border-warning">
                        <div class="card-header border-secondary bg-transparent d-flex justify-content-between align-items-center">
                            <span class="fw-bold tracking-widest text-uppercase small">Codice: {{$train->train_code}}</span>
                            @if($train->is_cancelled)
                            <span class="badge rounded-pill bg-danger text-white">CANCELLATO</span>
                            @elseif($train->is_on_time)
                            <span class="badge rounded-pill bg-success text-dark">IN ORARIO</span>
                            @else
                            <span class="badge rounded-pill bg-warning text-dark">IN RITARDO</span>
                            @endif
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-white mb-3 text-uppercase">{{$train->agency}}</h5>
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <div class="text-start">
                                    <div class="small opacity-75">PARTENZA</div>
                                    <div class="fs-5 fw-bold text-white">{{$train->departure_station}}</div>
                                    <div class="text-warning">{{$train->departure_time}}</div>
                                </div>
                                <div class="px-2">
                                    <i class="bi bi-arrow-right fs-4"></i>
                                </div>
                                <div class="text-end">
                                    <div class="small opacity-75">ARRIVO</div>
                                    <div class="fs-5 fw-bold text-white">{{$train->arrival_station}}</div>
                                    <div class="text-warning">{{$train->arrival_time}}</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer border-secondary bg-transparent d-flex justify-content-between small">
                            @if($train->is_cancelled)
                            <span class="text-danger fw-bold text-uppercase">Cancellato</span>
                            @else
                            <span>Carrozza: {{$train->number_of_carriages}}</span>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <main>
        </div>
</body>

</html>