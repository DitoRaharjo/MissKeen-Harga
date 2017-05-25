<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gizi extends Model
{
  protected $table = 'gizi';

  protected $fillable = [
  'calory_amount',
  'ingredient_id',
  'created_at',
  'updated_at',
  'deleted_at',
  ];

  public function ingredient() {
    return $this->belongsTo('App\Ingredient');
  }
}
