<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
  protected $table = 'ingredients';

  protected $fillable = [
  'name',
  'created_at',
  'updated_at',
  'deleted_at',
  ];

  public function harga() {
    return $this->hasOne('App\Harga');
  }
}
