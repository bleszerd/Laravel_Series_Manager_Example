<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episodes extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'watched',
    ];

    public function season()
    {
        return $this->belongsTo(Season::class);
    }
}
