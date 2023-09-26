@extends('layouts.public');

@section('content')

    <div class="jumbo-container">
        <img class="jumbotron" src="/img/jumbotron.jpg" alt="">
    </div>

    <div class="gallery">
        <div class="gallery">
            <div class="row row-cols-6">
                <div class="col" v-for="(character, i) in comics" :key="`character_${i}`">
                    <div class="card border-0 rounded-0 h-100 bg-transparent text-white">
                        <img :src="comics.thumb" alt="" />
                        <div class="card-body p-0 pb-5 pt-2">
                            {$comics as $title}
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn btn-primary text-white text-center rounded">
                LOAD MORE
            </div>
        </div>

       
    </div>

    <ul class="banner nav flex-row">
        <li class="nav-item"><a href="#" class="nav-link"><img src="/img/buy-comics-digital-comics.png"
                    alt="">
                DIGITAL COMICS</a></li>
        <li class="nav-item"><a href="#" class="nav-link"><img src="/img/buy-comics-merchandise.png"
                    alt="">DC
                MERCHANDISE</a></li>
        <li class="nav-item"><a href="#" class="nav-link"><img src="/img/buy-comics-subscriptions.png"
                    alt="">SUBSCRIPTION</a></li>
        <li class="nav-item"><a href="#" class="nav-link"><img src="/img/buy-comics-shop-locator.png"
                    alt="">COMIC
                SHOP LOCATION</a></li>
        <li class="nav-item"><a href="#" class="nav-link"><img src="/img/buy-dc-power-visa.svg"
                    alt="">DC POWER
                VISA</a></li>
    </ul>

@endsection
