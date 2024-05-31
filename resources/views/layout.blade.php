<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') </title>

    <style>
        .activo a {
            color: red;
            text-decoration: underline;
        }
    </style>

</head>

<body>
    <nav class="navbar">
        <table class="table">
            @include('partials.nav')
            @yield('content')
        </table>
    </nav>
</body>

</html>