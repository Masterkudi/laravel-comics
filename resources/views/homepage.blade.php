<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title")</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>
    @include("partials.header")

    <main>
       
        @yield("comics")

        <div class="jumbo-container">
            <img class="jumbotron" src="../../public/img/jumbotron.jpg" alt="">
          </div>
      
          <div class="gallery">
            <div class="gallery">
              <div class="row row-cols-6">
                <div class="col" v-for="(link, i) in links" :key="`character_${i}`">
                  <div class="card border-0 rounded-0 h-100 bg-transparent text-white">
                    <img :src="character.thumb" alt="" />
                    <div class="card-body p-0 pb-5 pt-2">
                    {$links as $section}
                    </div>
                  </div>
                </div>
              </div>
            </div>
      
            <div class="btn btn-primary d-flex text-white text-center rounded-0">LOAD MORE</div>
      
          </div>
      
          <ul class="banner nav flex-row">
            <li class="nav-item"><a href="#" class="nav-link"><img src="./assets/img/buy-comics-digital-comics.png" alt="">
                DIGITAL COMICS</a></li>
            <li class="nav-item"><a href="#" class="nav-link"><img src="./assets/img/buy-comics-merchandise.png" alt="">DC
                MERCHANDISE</a></li>
            <li class="nav-item"><a href="#" class="nav-link"><img src="./assets/img/buy-comics-subscriptions.png"
                  alt="">SUBSCRIPTION</a></li>
            <li class="nav-item"><a href="#" class="nav-link"><img src="./assets/img/buy-comics-shop-locator.png" alt="">COMIC
                SHOP LOCATION</a></li>
            <li class="nav-item"><a href="#" class="nav-link"><img src="./assets/img/buy-dc-power-visa.svg" alt="">DC POWER
                VISA</a></li>
          </ul>
      
    </main>

    @include("partials.footer")
</body>
</html>