<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DC </title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <!-- INCLUDO HEADER IN MODO CHE SIA LO STESSO IN OGNI PAGINA -->
    @include('include.header')

    <div>
        @yield('content')
    </div>



    <!-- INCLUDO IL FOOTER IN MODO CHE SIA LO STESSO IN OGNI PAGINA -->
    @include('include.footer')
</body>

</html>