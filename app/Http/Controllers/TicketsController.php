<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use App\Models\ticket;
use Illuminate\Http\Request;

class TicketsController extends Controller
{
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'service' => 'required|string|max:255',
    ]);

    $client = new cliente();
    $client->nombre = $validatedData['name'];
    $client->save();

    $ticket = new ticket();
    $ticket->numero = rand(1000, 9999);
    $ticket->servicio = $validatedData['service'];
    $ticket->cliente_id = $client->id;
    $ticket->save();

    return view('tickets.show')->with('ticket', $ticket->numero);
}
public function pending()
{
    $tickets = Ticket::whereNull('mesa_id')->get();
    return view('tickets.pending')->with('tickets', $tickets);
}
}
