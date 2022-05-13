<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patrimoine extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'date_acquisition',
        'value',
        'description',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function categorie()
    {
        return $this->hasOne(Category::class);
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
