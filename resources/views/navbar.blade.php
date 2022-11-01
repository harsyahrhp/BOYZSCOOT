<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="{{ asset ('css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        .header{

        }

        .wrapper{
            color: white;
            justify-content: center;

        }

        .left{
            padding: 10px 80px;
            display: flex;
            gap: 50px;
            font-size: 20px;
            padding-top: 10px;
        }

        .right{
            display: flex;
            gap: 30px;
            padding-right: 100px;
            font-size: 20px;
        }

    </style>
  </head>
  <body>

    <div class="header">
        <div class="wrapper">
            <nav class="navbar" style="background-color: black">
                <div class="left">
                    <img src="/asset/boyzscoot.png" alt="boyzscoot" height="100px" width="120px">
                </div>

                <div class="right">
                    <a href="/Home" class="nav-link">Home</a>
                    <a href="/vespa" class="nav-link">Stock</a>
                </div>
    </div>

        </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
