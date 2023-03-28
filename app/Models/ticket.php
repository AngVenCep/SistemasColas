<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    use HasFactory;

    protected $fillable = ['cliente_id', 'numero', 'atendido'];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function mesa()
    {
        return $this->belongsTo(Mesa::class)->withTimestamps();
    }

    public function atencion()
    {
        return $this->hasOne(Atencion::class);
    }
}
