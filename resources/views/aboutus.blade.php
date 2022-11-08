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

            .container{
                padding-top: 30px;
                padding-bottom: 30px;
            }

            .col img{
                width: 300px;
            }
        </style>
    </head>

    <body>

        <div class="container">
        <div class="container text-center">
            <div class="row">
                <div class="col">
                   <img src="https://mail.google.com/mail/u/0?ui=2&ik=d8654c97c6&attid=0.1&permmsgid=msg-a:r188075456441898108&th=18456ea0af2dd947&view=fimg&fur=ip&sz=s0-l75-ft&attbid=ANGjdJ82jBs4ozg3Hplt5UsDUW4FLW10u78ocb9I2BrodeUfdIasItE6ukHrRYaju4wr6qeI8S3fg9t_AhGiBt07gmS1O91Ivyfb2ibBsBwqAWZrCB2QZdKOmKKQyYw&disp=emb&realattid=18456e9fb7f886ce4ef1" alt="">
                </div>
                <div class="col">
                    <h2>Boyzscoot Vespa</h2>
                    <p>Boyzscoot adalah perusahaan yang bergerak dalam bidang jual beli vespa matic
                        yang sudah berdiri sejak tahun 2018. Dalam kurang lebih 4 tahun boyzscoot sudah menjual
                        lebih dari 100 unit vespa matic baik itu sprint, primavera, lx, s dan berbagai jenis lainnya.
                        Jadi tidak perlu diragukan lagi untuk membeli vespa di boyzscoot karena pengalaman kami yang sudah
                        cukup lama pada bidang ini dan tentunya vespa yang ada sudah melalui quality control dari tim kami.
                    </p>
                </div>
            </div>
        </div>
    </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
        </script>
    </body>

    </html>



@endsection
