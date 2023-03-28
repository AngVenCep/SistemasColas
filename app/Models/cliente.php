<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    use HasFactory;
    protected $fillable = ['nombre'];
    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
