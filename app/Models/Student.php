<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
     protected $table = 'students';
 
    public $timestamps = false;
    protected $fillable = ['student_name','father_name','mother_name','gender','board','institute_name','roll_number','reg_no',
    'phone','email','dob','department','present_address','permanent_address','password','role','is_active','image'];
 
}
