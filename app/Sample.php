<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sample extends Model
{
  protected $fillable = [
    'name', 'age', 'wieght', 
    'first_name', 'last_name', 
    'email', 'city', 'country', 
    'zip_code', 'about'
  ]; 
}
