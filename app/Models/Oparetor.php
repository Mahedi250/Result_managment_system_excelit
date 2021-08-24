<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oparetor extends Model
{
    use HasFactory;
     protected $table = 'oparetors';
 
   public $timestamps = false;
   protected $fillable = ['first_name','last_name','father_name','mother_name','gender',
   'phone','email','dob','nid','department','present_address','permanent_address','password','role','is_active','image'];


}
