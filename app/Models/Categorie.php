<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Categorie extends Model
{
    use HasFactory, HasRoles;

    protected $fillable = [
        'name',
        'description',
    ];

   public function objectEstates()
   {
       return $this->hasMany(ObjectEstate::class);
   }
}
