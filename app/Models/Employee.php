<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Employee extends Model
{
    use HasFactory;
    use softDeletes;
    protected $table="employee";
    protected $primarykey="id";

    public function setNameAttribute($value ){
       $this->attributes['name'] =ucwords($value);

    }
    public function getCreatedatAttribute($value){
      return date("d-M-Y",strtotime($value));
    }
    public function getUpdatedatAttribute($value){
        return date("d-M-Y",strtotime($value));
      }
}
