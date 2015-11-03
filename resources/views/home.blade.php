<!DOCTYPE html>
<html>
    <head>
        <title>Instalbum</title>
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body id="app">
        @include('partials.navbar')
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-2">Love the latest Aerosmith?</h1>
                <p class="lead">Share it with the world!</p>
                <hr>
                <a href="#" class="btn btn-lg btn-primary">Sign up now!</a>
            </div>
        </div>
        <div class="container">
            <h1 class="display-1">@{{ title }}</h1>
            <ul class="list-unstyled list-inline">
                <li class="col-md-3" v-for="album in latests">
                    <div class="card">
                        <div class="card-block">
                            <h4 class="card-title">@{{ album.title }}</h4>
                            <h6 class="card-subtitle text-muted">@{{ album.artist }}</h6>
                        </div>
                        <img v-bind:src="album.cover" class="img-responsive" alt="Card image">
                    </div>
                </li>
            </ul>
        </div>
    </body>
    <script src="js/app.js"></script>
</html>
