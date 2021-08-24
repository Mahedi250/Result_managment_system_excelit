<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;
use App\Models\ResultModel;



use Validator;

use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
       
         return view('teacher.index');
        /* $id = session('id');
         dd($id);*/


             }

            /* public function resultView(){
                $select = DB::select('select * from add_students');
              
                return view('teacher.result')->with('studentdata',$select);
                    }*/
        
                    
             public function profile(){

                $username = session('id');
                $select = DB::table('add_teachers')->where('id',$username)->first(); 
                return view('teacher.profile')->with('teacherdata',$select);
                    }

        public function TakenCourse(){
            $id = session('id');

            $select = DB::table('techer-subject')->where('teacher_id',$id)->pluck('subject_id');
            
            $data_list = DB::table('add_subject') ->whereIn('id', $select)->get();
           // $ids = join(',',$select);
     // dd($data_list);
             
            return view('teacher.takencourse')->with('subjectdata',$data_list);
            //SELECT add_students.student_name, add_subject.subject_name FROM add_students,add_subject,add_result where add_result.student_id=add_students.id and add_result.subject_id=add_subject.id


        }

        public function resultView($id){


            $studentResult = DB::select('SELECT add_students.id,add_students.student_name,add_result.result 
            FROM add_students INNER JOIN add_result ON add_result.student_id=add_students.id WHERE add_result.subject_id=?',[$id]);

            // dd($studentResult);
        //   
            return view('teacher.result')->with('studentdata',$studentResult)->with('subject_id',$id);
        }


        public function SubmitMarks (Request $req){

                         $student_id= $req->input('student_id');
                          $Subject_id= $req->input('Subject_id');
                         $Student_marks=$req->input('marks');
                         

                    

           
             //$result = ResultModel::where('student_id',$student_id)->where('subject_id',$Subject_id)->update('result', $Student_marks);

             $result = DB::table('add_result')->where('student_id',$student_id)->where('Subject_id',$Subject_id)
             ->update(array('result' => $Student_marks)); 
    


          if($result==true){

                return "success";

              //  return view('teacher.result')->with('studentdata',$studentResult)->with('subject_id',$id);

          }
          else{

            return "fail";
          }

        }
       



        public function result($id){


            $studentResult = DB::select('SELECT add_students.id,add_students.student_name,add_result.result 
            FROM add_students INNER JOIN add_result ON add_result.student_id=add_students.id WHERE add_result.student_id=?',[$id]);

             //dd($studentResult);
        //   
            return response()->json(['student'=>$studentResult, ]);
        }



 
}
