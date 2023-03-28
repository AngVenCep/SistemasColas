<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [TicketsController::class, 'pending'])->name('tickets');
Route::get('/tickets/create', [TicketController::class, 'create'])->name('tickets');
    // Route::post('/tickets', [TicketController::class, 'store'])->name('tickets');
    // Route::get('/tickets/{id}', [TicketController::class, 'show'])->name('tickets');
    // Route::get('/tickets/{id}/edit', [TicketController::class, 'edit'])->name('tickets');
    // Route::put('/tickets/{id}', [TicketController::class, 'update'])->name('tickets');
    // Route::delete('/tickets/{id}', [TicketController::class, 'destroy'])->name('tickets');
