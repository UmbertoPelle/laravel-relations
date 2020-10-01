<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model{

  protected $fillable = [

    'state',
    'city',
    'street'
  ];

  public function employees(){

    return $this -> hasMany(Employee::class);
  }
}
