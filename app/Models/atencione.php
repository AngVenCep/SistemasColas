<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class atencione extends Model
{
    use HasFactory;

    protected $fillable = ['ticket_id', 'mesa_id'];

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }

    public function mesa()
    {
        return $this->belongsTo(Mesa::class);
    }
}
