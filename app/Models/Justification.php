<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Justification extends Model
{
    protected $fillable = ['justification'];

    public function designations()
    {
        return $this->hasMany(Designation::class);
    }
}
