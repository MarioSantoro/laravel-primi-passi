<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Laravel</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                @foreach ($listLink as $link)
                    <li> <a href="{{ route($link) }}">{{ $link }}</a></li>
                @endforeach
            </ul>
        </nav>
    </header>

    <h1>HomePage di {{ $name . ' ' . $surname }}</h1>
</body>

</html>
