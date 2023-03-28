<html>
    <head>
        <title>Tickets Pendientes</title>
    </head>
    <body>
        <h1>Tickets Pendientes</h1>
        <ul>
            @foreach($tickets as $ticket)
                <li>{{ $ticket->numero }} - {{ $ticket->servicio }}</li>
            @endforeach
        </ul>
    </body>
</html>
