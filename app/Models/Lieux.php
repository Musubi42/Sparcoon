<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lieux extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'rank', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(App\Models\User::class);
    }
}
