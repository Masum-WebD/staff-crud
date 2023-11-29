<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Designating extends Model
{
   protected $fileable=['id', 'name'];

   public function staffs()
   {
       return $this->hasMany(Staff::class, 'deg_id');
   }
}
