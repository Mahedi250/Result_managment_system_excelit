<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Oparetor;
use App\Models\Subject;
use App\Models\Result;
use App\Models\Section;
use App\Http\Requests\TeacherRequest;
use App\Http\Requests\OparetorRequest;
use App\Http\Requests\StudentRequest;


use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $id = session('id');
         $users=User::where('id',$id)->first();
        //   $oparetors = Oparetor::all();
        // $teachers = Teacher::all();
        // $students = Student::all();
        // $subjects = Subject::all();
        return view('admin.index')->with ('users',$users);
                                        //  ->with('oparetors',$oparetors)
                                        // ->with('teachers',$teachers)
                                        // ->with('subjects',$subjects)
                                        // ->with('students',$students);
    }

      public function dashboard()
    {
        
        $oparetors = Oparetor::all();
        $teachers = Teacher::all();
        $students = Student::all();
        $subjects = Subject::all();
        
      // return view('admin.studentlist')->with('users',$users); 
       return view('admin.dashboard')->with('oparetors',$oparetors)
                                        ->with('teachers',$teachers)
                                        ->with('subjects',$subjects)
                                        ->with('students',$students);
    }
   //---------------------------------------Oparetor start---------------------------------------------------------------------//
    //---------view add oparetor page-------------//
    public function create_oparetor()
    {
        
       return view('admin.create_oparetor');
    }
//---------view add oparetor page end-------------//
 //--------- add oparetor funtion start-------------//
     public function add_oparetor(OparetorRequest $request)
    {

         

        Oparetor::insert([
           
            'first_name'=>$request->first_name,
             'last_name'=>$request->last_name,
              'father_name'=>$request->father_name,
               'mother_name'=>$request->mother_name,
                'phone'=>$request->phone,
                 'email'=>$request->email,
                  'nid'=>$request->nid,
                   'gender'=>$request->gender,
                    'department'=>$request->department,
                    'present_address'=>$request->present_address,
                  'permanent_address'=>$request->permanent_address,
                   'dob'=>$request->dob,
                   'password'=>$request->password,
                   'image'=>"",
                   'role'=>"2",
                    'is_active'=>"1"
        ]);
       return view('admin.create_oparetor',['success'=>true]);
    }
    //--------- add oparetor funtion end-------------//
  //--------- add oparetor list view funtion start-------------//
     public function oparetorlist()
    {
        $oparetors = Oparetor::all();
        return view('admin.oparetorlist')->with('oparetors',$oparetors);
       
    }
      //--------- add oparetor list view funtion end-------------//
     //---------  oparetor edit start-------------//
 public function Oparetoredit($id)
    {  
        $user = Oparetor::find($id);
       return view('admin.oparetor_edit')->with('user',$user);
    }
       //---------  oparetor edit end-------------//

     //-----------Oparetor update start----------// 
    public function oparetor_update(Request $req,$id)
    {
        
        $user = Oparetor::find($id);
        $user->username = $req->username;
        $user->phone = $req->phone;
        $user->adress = $req->adress;
         $user->email = $req->email;
        $user->password =$req->password;
        $user->is_active="1";
        $user->save();
        
        return redirect('/Admin/oparetorlist');//->route('/Admin/profile');
    }

    //delete funtion start
     public function   Oparetordestroy($id){
        Oparetor::destroy($id);
        return redirect('/Admin/oparetorlist');
        //return redirect()->route('admin.index');
    }
 //delete funtion end
      //-----------oparetor update end----------// 
    //---------------------------------------Oparetorend-------------------------------------------------------------//
    //-------------------------------------teacherstart--------------------------------------------------------------//
    public function create_teacher()
    {
        //echo "mesba";
       return view('admin.create_teacher');
    }
     public function add_teacher(TeacherRequest $request)
    {
          Teacher::insert([
           
            'first_name'=>$request->first_name,
             'last_name'=>$request->last_name,
              'father_name'=>$request->father_name,
               'mother_name'=>$request->mother_name,
                'phone'=>$request->phone,
                 'email'=>$request->email,
                  'nid'=>$request->nid,
                   'gender'=>$request->gender,
                    'department'=>$request->department,
                    'present_address'=>$request->present_address,
                  'permanent_address'=>$request->permanent_address,
                   'dob'=>$request->dob,
                   'password'=>$request->password,
                   'image'=>"",
                   'role'=>"2",
                    'is_active'=>"1"
                   
          ]);  
       return view('admin.create_teacher');
           }
    

      public function teacherlist()
    {
        $teachers = Teacher::all();
       return view('admin.teacherlist')->with('teachers',$teachers);
    }

  public function  teacheredit($id)
    {  
        $user = Teacher::find($id);
       return view('admin.teacher_edit')->with('user',$user);
    }

    //-----------teacher update start----------// 
public function teacher_update(Request $req,$id)
    {
        
        $user = Teacher::find($id);
        $user->username = $req->username;
        $user->phone = $req->phone;
        $user->adress = $req->adress;
         $user->email = $req->email;
        $user->password =$req->password;
        $user->is_active="1";
        $user->save();
        return redirect('/Admin/teacherlist');//->route('/Admin/profile');
    }
    //-----------teacher update end ----------// 

    //delete funtion start
     public function Teacherdestroy($id){
        Teacher::destroy($id);
        return redirect('/Admin/teacherlist');
        //return redirect()->route('admin.index');
    }
 //delete funtion end
//active suspend funtion start
     public function Teachersuspend(Request $req,$id)
    {  
        $user = Teacher::find($id);
        $user->username;
        $teacher = User::where('username', $user->username)
->first();
 //dd($teacher);
        $teacher->is_active=0;
        $teacher->save();
       return redirect('/Admin/teacherlist');
    }
     public function Teacheractive(Request $req,$id)
    {  
        $user = Teacher::find($id);
        $user->is_active=1;
        $user->save();
      return redirect('/Admin/teacherlist');
    }
    //active suspend funtion end
//---------------------------------------teacher end---------------------------------------------------------------------//
    //---------------------------------------student start---------------------------------------------------------------------//
     public function create_student()
    {
       return view('admin.create_student');
    }
    //add student
    
         public function add_student(StudentRequest $request)
    {

        Student::insert([
           
            'student_name'=>$request->student_name,
              'father_name'=>$request->father_name,
               'mother_name'=>$request->mother_name,
                'phone'=>$request->phone,
                 'email'=>$request->email,
                   'gender'=>$request->gender,
                    'department'=>$request->department,
                    'present_address'=>$request->present_address,
                  'permanent_address'=>$request->permanent_address,
                  'board'=>$request->board,
                    'reg_no'=>$request->reg_no,
                    'roll_number'=>$request->roll_number,
                  'institute_name'=>$request->institute_name,
                   'dob'=>$request->dob,
                   'password'=>$request->password,
                   'image'=>"",
                   'role'=>"4",
                    'is_active'=>"1"
                   
          ]);
          return view('admin.create_student');
    }

    public function studentlist()
    {
        $students = Student::all();
       return view('admin.studentlist')->with('students',$students);
    }
    //-----------student update end----------// 
    //delete funtion start
     public function Studentdestroy($id){
        Student::destroy($id);
        return redirect('/Admin/studentlist');
        //return redirect()->route('admin.index');
    }
 //delete funtion end

//---------------------------------------student end---------------------------------------------------------------------//

//---------------------------------------subject start---------------------------------------------------------------------//
     public function create_subject()
    {
        
       return view('admin.create_subject');
    }
        public function Addsubject(Request $req)
    {

         $user = new Subject;
        $user->subject_name = $req->subject_name;
        $user->subject_code = $req->subject_code;
           $user->save();
       return view('admin.create_subject',['success'=>true]);
    } //end method
//subject list funtion
    public function sublist()
    {
        $subjects = Subject::all();
        
       return view('admin.sublist')->with('subjects',$subjects);
    }
    //subject edit view page
      public function    subject_edit($id)
    {  
        $user = Subject::find($id);
       return view('admin.subject_edit')->with('user',$user);
    }

       //-----------subject update start----------// 
     public function subject_update(Request $req,$id)
    {
        
        $user = Subject::find($id);
        $user->subject_name = $req->subject_name;
        $user->subject_code = $req->subject_code;
        
        $user->save();
        return redirect('/Admin/subjectlist');//->route('/Admin/profile');
    }
    
    //delete funtion start
     public function Subjectdestroy($id){
        Subject::destroy($id);
        return redirect('/Admin/subjectlist');
        //return redirect()->route('admin.index');
    }
 //delete funtion end
 //---------------------------------------subject   endt---------------------------------------------------------------------//
    //---------------------------------------section start---------------------------------------------------------------------//
//----------------create section view page-------------------------------------//
      public function create_section()
    {
        $sections=Section::all();
        $subject = Subject::all();
        $teachers = Teacher::all();
        $students = Student::all();
        
      // return view('admin.studentlist')->with('users',$users); 
       return view('admin.create_section')->with('subject',$subject)
                                        ->with('teachers',$teachers)
                                        ->with('students',$students)
                                        ->with('sections',$sections);
    }
    public function Addsection(Request $req)
    {
        
       $student_id = $req->student;
        $subject_id = $req->subject;
        $teacher_id = $req->teacher;


        DB::table('techer-subject')->insert(
            array('teacher_id' =>$teacher_id, 'subject_id' => $subject_id)
        );

           
        DB::table('student_subject')->insert(
            array('student_id' => $student_id, 'subject_id' => $subject_id)
        );

        DB::table('add_result')->insert(
            array('student_id' => $student_id, 'subject_id' => $subject_id, 'result' => 0.0)
        );

       /* $user = new Section;
        $user->student_name = $req->student;
        $user->subject_name = $req->subject;
        $user->teacher_name = $req->teacher;
        $user->result = 0.0;
        $user->section = $req->section;
           $user->save();*/





           

       return redirect('/create/section');
    } //
    //section list funtion
    public function sectionlist()
    {
        $subject= DB::select('SELECT  add_teachers.username,add_subject.subject_name,add_subject.id  FROM add_teachers,add_subject,`techer-subject` where 
        `techer-subject`.`teacher_id`=add_teachers.id and `techer-subject`.`subject_id`=add_subject.id');

       // $sections = Section::all();
      // dd($subject);
       return view('admin.sectionlist')->with('subject',$subject);
    }
       public function sectiondetails()
    {
        
      
       return view('admin.sectiondetails')->with('subject',$subject);
    }
     //section edit view page
      public function    section_edit($id)
    {  

        $section = Section::find($id);

        $sections=Section::all();
        $subject = Subject::all();
        $teachers = Teacher::all();
        $students = Student::all();
        
      // return view('admin.studentlist')->with('users',$users); 
       return view('admin.section_edit',)->with('subject',$subject)
                                        ->with('teachers',$teachers)
                                        ->with('students',$students)
                                        ->with('sections',$sections)
                                        ->with('section',$section);
                                        
       //return view('admin.section_edit')->with('sections',$sections);
    }

    public function resultView($id){


        $studentResult = DB::select('SELECT add_students.id,add_students.student_name,add_result.result 
        FROM add_students INNER JOIN add_result ON add_result.student_id=add_students.id WHERE add_result.subject_id=?',[$id]);

        // dd($studentResult);
    //   
        return view('admin.result')->with('studentdata',$studentResult)->with('subject_id',$id);
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




    //section update
     public function section_update(Request $req,$id)
    {

        $sections = Section::find($id);
        $sections->student_name = $req->student;
        $sections->subject_name = $req->subject;
        $sections->teacher_name = $req->teacher;
        $sections->result = $req->result;
        $sections->section = $req->section;
           $sections->save();
       return redirect('/details/section');
    } //
//delete funtion start
     public function Sectiondestroy($id){
        Section::destroy($id);
        return redirect('/details/section');
        //return redirect()->route('admin.index');
    }
 //delete funtion end
    //--------------------------------------section end---------------------------------------------------------------------//
     public function create_result()
    {
        //echo "mesba";
       return view('admin.create_result');
    }

          public function Addresult(Request $req)
    {

         $user = new Subject;
        $user->subject_name = $req->subject_name;
        $user->subject_code = $req->subject_code;
           $user->save();
       return view('admin.create_student');
    } //end method

  //---------------------------------------Admin start--------------------------------------------------------------------//
    public function profile()
    {
        $id = session('id');
        
         $users=User::where('id',$id)->first();
       
         return view('admin.profile')->with ('users',$users);
    }
    public function profile_update(Request $req)
    {
        $id = session('id');
        $user = User::find($id);
        $user->username = $req->username;
        $user->first_name =$req->first_name;
        $user->last_name =$req->last_name;
        $user->email = $req->email;
        $user->role = "1";
        $user->password =$req->password;
        $user->is_active="1";
       
        $newImageName=time().'-'.$req->name.'.'.$req->image->extension();
       $image=$req->image->move(public_path('profile_img'),$newImageName);
        $user->image=$newImageName;
        $user->save();
        return redirect('/Admin/profile');//->route('/Admin/profile');
    }
   

//---------------------------------------admin end---------------------------------------------------------------------//
   
  
    
    public function resultlist()
    {
        $users = User::all();
       return view('admin.resultlist')->with('users',$users);
    }
 
    

  
   
 public function  result_edit($id)
    {  
        $user = User::find($id);
       return view('admin.result_edit')->with('user',$user);
    }
   
    
    
     public function usersPending()
    {  
      $users = User::all();
       return view('admin.usersPending')->with('users',$users);
    }

   
 
     
}
