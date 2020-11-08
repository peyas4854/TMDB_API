<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/card.css') }}">
    <link rel="icon" href="{{ asset('image/movie.png') }}" type="image/gif" sizes="16x16">

    <title>Movie Application </title>
</head>
<body>

<div>

    <div class="container-fluid">

        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                <a class="navbar-brand" href="#">Movie Application</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Movie <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tv Show</a>
                        </li>
{{--                        <li class="nav-item dropdown">--}}
{{--                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                Dropdown--}}
{{--                            </a>--}}
{{--                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
{{--                                <a class="dropdown-item" href="#">Action</a>--}}
{{--                                <a class="dropdown-item" href="#">Another action</a>--}}
{{--                                <div class="dropdown-divider"></div>--}}
{{--                                <a class="dropdown-item" href="#">Something else here</a>--}}
{{--                            </div>--}}
{{--                        </li>--}}

                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
{{--                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>--}}
                    </form>
                </div>
            </nav>
        </header>
        <div class="row">
            @foreach($movieList as $movie )

                <div class="col-3 mb-3">
                    <div class="cellphone-container">
                        <div class="movie">
                            <div class="menu"><i class="material-icons"></i></div>
                            <div class="movie-img">

                                <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$movie['poster_path']}}" alt="">
                            </div>
                            <div class="text-movie-cont">
                                <div class="mr-grid">
                                    <div class="col1">
                                        <h4>{{ $movie['title'] }}</h4>
                                        <ul class="movie-gen">
                                            {{--                                            <li>PG-13  /</li>--}}
                                            {{--                                            <li>2h 49min  /</li>--}}
{{--                                            <li>{{ $movie['genre_ids'] }}</li>--}}

                                            @foreach($movie['genre_ids'] as $genre)

                                                <li> {{$genres->get($genre)}}, </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="mr-grid summary-row">
                                    <div class="col2">
                                        <h5>SUMMARY</h5>
                                    </div>
                                    <div class="col2">
                                        <ul class="movie-likes">
                                            <li><i class="material-icons">&#xE813;</i>124</li>
                                            <li><i class="material-icons">&#xE813;</i>3</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mr-grid">
                                    <div class="col1">
                                        <p class="movie-description">{{ $movie['overview'] }}</p>
                                    </div>
                                </div>
                                <div class="mr-grid actors-row">
                                    <div class="col1">
                                        <p class="movie-actors">Matthew McConaughey, Anne Hathaway, Jessica Chastain</p>
                                        <p class="movie-actors">Release date
                                            : {{ Carbon\Carbon::parse($movie['release_date'])->format(' M d , Y') }} </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>


</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
