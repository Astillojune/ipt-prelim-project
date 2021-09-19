<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    </head>
    <body class="antialiased">
        <header>
            <nav class="d-flex justify-content-center my-5">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/')}}">View 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/view2')}}">View 2</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="{{url('/view3')}}">View 3</a>
                    </li>
                  </ul>
            </nav>
        </header>
        <div class="d-flex justify-content-center my-5">
            <img src="{{URL::asset('/images/img3.png')}}" alt="img3">
        </div>
        <div class="d-flex justify-content-center my-5">
            <h4>Integrative Programming 1</h4>
        </div>
        <link rel="stylesheet" href="{{asset('js/bootstrap.min.js')}}">
    </body>
</html>
