<!DOCTYPE html>
<html>
    <head>
        <title>Obtener Ticket</title>
    </head>
    <body>
        <h1>Obtener Ticket</h1>
        <form method="POST" action="{{ route('tickets.store') }}">
            @csrf
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name"><br><br>
            <label for="service">Tipo de Servicio:</label>
            <select id="service" name="service">
                <option value="Depósito">Depósito</option>
                <option value="Retiro">Retiro</option>
                <option value="Consulta">Consulta</option>
                <option value="Otro">Otro</option>
            </select><br><br>
            <button type="submit">Obtener Ticket</button>
        </form>
        @if(isset($ticket))
            <h2>Su número de ticket es: {{ $ticket }}</h2>
        @endif
    </body>
</html>
