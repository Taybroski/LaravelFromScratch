<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Bootstrap --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    {{-- Blog Template CSS --}}
    {{-- <link rel="stylesheet" href="{{ asset('assets/app.scss') }}"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/blog.css') }}">
    <title>Laracasts</title>
</head>
<body>
    
    @include('layouts.nav')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @yield('content')
            </div>
            
            <div class="col-md-4">
                @include('layouts.sidebar')
            </div>
        </div>
    </div>
    @include('layouts.footer')

</body>
</html>