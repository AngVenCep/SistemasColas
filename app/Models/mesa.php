<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mesa extends Model
{
    use HasFactory;
    protected $fillable = ['numero'];

    public function atenciones()
    {
        return $this->hasMany(Atencion::class);
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
