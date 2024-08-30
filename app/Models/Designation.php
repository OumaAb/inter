<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    protected $fillable = ['designation', 'quantity', 'justification_id'];

    public function justification()
    {
        return $this->belongsTo(Justification::class);
    }
}
