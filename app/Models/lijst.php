<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lijst extends Model
{
    use HasFactory;
    protected $guarded =[];
    

    public function items()
    {
        return $this->hasmany(lijst::class);

    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
