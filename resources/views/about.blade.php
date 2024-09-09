<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- bootstrap --}}
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <title>About</title>


</head>
<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
<div class="container">

    <div class="row">
        <div class="col-12">
            <h1>{{$name}}</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-4">
            <img src="{{$profile_picture}}" style="width:100%">
        </div>

        <div class="col-8">
            <p>
                {{$biografia}}
            </p>
        </div>
    </div>

</div>

</body>
</html>
