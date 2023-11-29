<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $fileable=['name','deg_id','birth_date'];

    public function designation(){
        return $this->belongsTo(Designating::class,'deg_id');
    }
}
