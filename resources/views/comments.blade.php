<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kommentare ausgeben</title>
</head>
<body>
    <h1>Kommentare und Variablen</h1>
    {{-- Variablen ausgeben --}}
    <p>
        {{-- Ausgabe nicht escapen--}}
        {!! $comment !!}
    </p>

    {{-- Kontrollstrukturen --}}
    <p>
        @if ($songs === 1)
            ein Song
        @elseif ($songs > 1)
            mehrere Songs
        @else
            kein Song
        @endif
    </p>

    <p>
        @unless ($loggedIn)
            Nicht eingeloggt
        @endunless
    </p>

    {{-- Schleifen --}}
    <hr>
    <ul>
        @for ( $i = 0; $i < 4; $i++ )
            <li>Der aktuelle Wert ist {{ $i }}</li>
        @endfor
    </ul>
</body>
</html>
