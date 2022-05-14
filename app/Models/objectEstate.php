<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class objectEstate extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'date_acquisition',
        'value',
        'description',
    ];
    
    public function patrimoine()
    {
        return $this->belongsTo(Patrimoine::class);
    }

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

    
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
