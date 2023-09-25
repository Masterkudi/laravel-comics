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
    @include("partials.navbar")

    <main>
        <h1>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem, ex veniam architecto nobis dolor tempora, debitis sit labore fuga similique doloribus magnam corporis voluptatibus quia incidunt. Eaque omnis aliquid dolor.</h1>
        @yield("content")
    </main>

    @include("partials.footer")
</body>
</html>