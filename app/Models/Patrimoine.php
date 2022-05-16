<?php

namespace App\Models;

use App\Models\objectEstate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Patrimoine extends Model
{
  use HasFactory;


  protected $fillable = [
    'name',
    'description',
    'user_id',
  ];

  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function objectEstates()
  {
    return $this->hasMany(ObjectEstate::class);
  }
}
