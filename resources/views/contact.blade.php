<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
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

    <h1>Contact di {{ $name . ' ' . $surname }}</h1>
</body>

</html>
