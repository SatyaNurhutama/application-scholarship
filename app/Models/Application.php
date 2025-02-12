<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    public function scholarship(){
        return $this->belongsTo(Scholarship::class, 'scholarship_id', 'id');
    }
}
