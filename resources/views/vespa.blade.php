@extends('structer')

@section('title', 'container')

@section('container')

    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

        <style>
            body {
                background-color: #fedf0a;
            }

            .vespa {
                padding-top: 50px;
                padding-bottom: 50px;
            }
        </style>
    </head>

    <body>

        <div class="vespa">

            <div class="container-fluid text-center">
                <div class="row">
                    @foreach ($vespas as $vespa)
                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img src={{ $vespa->body }} class="card-img-top" alt="biru">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $vespa->name }};</h5>
                                    <p class="card-text">
                                        <li>{{ $vespa->pajak }}</li>
                                        <li>{{ $vespa->mesin }}</li>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
        </script>
    </body>

    </html>

@endsection
