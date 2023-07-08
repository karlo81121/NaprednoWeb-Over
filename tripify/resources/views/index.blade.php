<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;600;900&display=swap" rel="stylesheet">
    <title>Tripify</title>
</head>

<body>
    @if (session('message'))
        <div class="alert alert-warning">
            {{ session('message') }}
        </div>
    @endif

    @include('header')

    @if (!is_null($featuredAgency) && !is_null($featuredDestination))
        <div class="container mt-4 check-this-out-container">
            <a href="{{ url('/destination/' . $featuredDestination->id) }}">
                <img src="{{ $featuredDestination->picture }}" class="check-this-out-picture" />
            </a>
            <div class="top-left">CHECK THIS OUT</div>
            <div class="bottom-left-agency">{{ $featuredAgency->name }}</div>
            <div class="bottom-left-trip">{{ $featuredDestination->name }}</div>
        </div>
    @endif

    @if (!is_null($destinations) && count($destinations) > 0)
        <div class="container mt-4 destionation-container mb-5">
            <div class="destination-title-container">
                <h3 class="text-dark mb-4">Destinations</h3>
            </div>

            @foreach ($destinations as $destination)
                <a href="{{ url('/destination/' . $destination->id) }}">
                    <div class="card destination-card w-100 mb-3">
                        <img src="{{ $destination->picture }}" width="250" height="250"
                            style="object-fit: cover;" />
                        <div class="card-body">
                            <h5 class="card-title"><b>{{ $destination->name }}</b></h5>
                            <p class="card-price">{{ $destination->cost }}$</p>
                            <p class="card-text">{{ $destination->description }}</p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    @endif

    @if (!is_null($agencies) && count($agencies) > 0)
        <div class="container mt-4 agencies-container mb-5">
            <div class="agencies-title-container">
                <h3 class="text-dark mb-4">Agencies</h3>
            </div>

            <div class="agencies-cards mb-5 w-100">
                @foreach ($agencies as $agency)
                    <a href="{{ url('/agency/' . $agency->id) }}">
                        <div class="card">
                            <img src="{{ $agency->picture }}" />
                            <div class="card-body">
                                <h5 class="card-title text-center">{{ $agency->name }}</h5>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    @endif

    @include('footer')
</body>

</html>
