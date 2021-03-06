<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Séries</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light m-2 ms-5 d-flex justify-content-between">
        <a href="{{ route('list_series') }}" class="navbar-brand">Home</a>
        @auth
            <a href="/logout" class="me-2 text-decoration-none">Sair</a>
        @endauth
        
        @guest
            <a href="/auth" class="me-2 text-decoration-none">Entrar</a>
        @endguest
    </nav>

    <div class="container">
        <div class="bg-primary text-light p-3 my-3 rounded">
            <h1 class="fs-3 text fw-bold">@yield('header')</h1>
        </div>

        @yield('content')
    </div>
</body>

</html>
