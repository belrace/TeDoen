<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lijstItem extends Model
{
    use HasFactory;
    protected $guarded =[];
    

    public function items()
    {
        return $this->hasmany(lijstItem::class);

    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
