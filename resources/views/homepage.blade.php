@extends('layouts.public');

@section('content')
    <div class="jumbo-container">
        <img class="jumbotron" src="/img/jumbotron.jpg" alt="">
    </div>

    <div class="gallery">
        <div class="gallery d-flex">
            <div class="row row-cols-4">
                @foreach ($cards as $card)
                    <div class="card-box p-3">
                        <img src="{{ $card['thumb'] }}" alt="comic-img">
                        <div class="justify-content-center align-items-center">
                            <div class="comic-name text-white text-uppercase text-center p-2">
                                {{ $card['series'] }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="btn btn-primary text-white text-center rounded">
            LOAD MORE
        </div>
    </div>

    <ul class="banner nav flex-row">
        <li class="nav-item"><a href="#" class="nav-link"><img src="/img/buy-comics-digital-comics.png"
                    alt="">
                DIGITAL COMICS</a></li>
        <li class="nav-item"><a href="#" class="nav-link"><img src="/img/buy-comics-merchandise.png" alt="">DC
                MERCHANDISE</a></li>
        <li class="nav-item"><a href="#" class="nav-link"><img src="/img/buy-comics-subscriptions.png"
                    alt="">SUBSCRIPTION</a></li>
        <li class="nav-item"><a href="#" class="nav-link"><img src="/img/buy-comics-shop-locator.png"
                    alt="">COMIC
                SHOP LOCATION</a></li>
        <li class="nav-item"><a href="#" class="nav-link"><img src="/img/buy-dc-power-visa.svg" alt="">DC
                POWER
                VISA</a></li>
    </ul>
@endsection
