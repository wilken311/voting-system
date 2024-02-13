<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\PersonalInformation;
use App\Models\Timer;


class StudentController extends Controller
{

    
    //DISPLAY THE LIST OF STUDENTS
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coc_timer=Timer::find(1);
        $e_timer=Timer::find(2);
        //Get the list of student's information from personal_informations table,students table and strands table using eloquent relationship. 
        $person_student = Student::All();
        $params = [
            'title' => 'Students List',
            'coc_timer'=> $coc_timer,
            'e_timer'=> $e_timer,
            'students' => $person_student,
        ];
        return view('admin.students.students_list')->with($params);
    }



    //CREATE STUDENT FORM
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $coc_timer=Timer::find(1);
        $e_timer=Timer::find(2);
        $params = [
           
            'coc_timer'=> $coc_timer,
            'e_timer'=> $e_timer,
           
        ];
        return view('admin.students.student_create')->with($params);
   
    }



    //STORE STUDENT INFORMATION FROM CREATE STUDENT FORM
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'lrn_or_id_no' => 'required|unique:personal_informations',
            'lastname' => 'required',
            'firstname' => 'required',
            'date_of_birth' => 'required',
            'gender' => 'required',
            'track_and_strand' => 'required|exists:students,strand_id',      
            'grade_level' => 'required',
            'section' => 'required',
            'status' => 'required',
            ]
        );

        
        //For Personal Information
        $person_info = new PersonalInformation;
        $person_info->lrn_or_id_no=$request->input('lrn_or_id_no');
        $person_info->lastname=$request->input('lastname');
        $person_info->firstname=$request->input('firstname');
        $person_info->middlename=$request->input('middlename');
        $person_info->suffix=$request->input('suffix');
        $person_info->date_of_birth=$request->input('date_of_birth');
        $person_info->gender=$request->input('gender');
        $person_info->address=$request->input('address');
        $person_info->contact_no=$request->input('contact_no');
        $person_info->photo=$request->input('photo');
        $person_info->person_type=$request->input('type');
        $person_info->save();

        //For Student Information who enrolled per school year and semester.
        $student_info = new Student;
        $student_info->school_year=$request->input('school_year');
        $student_info->semester=$request->input('semester');
        $student_info->strand_id=$request->input('track_and_strand');
        $student_info->grade_level=$request->input('grade_level');
        $student_info->section=$request->input('section');
        $student_info->status=$request->input('status');
     
            
        //Link the PersonalInformation Model to Student Model to get the id of Personalinformations table
        //students() is a function found in PersonalInfomation Model.
        $person_info->students()->save($student_info);

        //Return back to the Student List
        return redirect()->route('admin.students.index')->with('success', "The Student <strong>$person_info->lastname, $person_info->firstname $person_info->middlename $person_info->suffix </strong> has successfully been created.");

       
    }



    //SHOW STUDENT INFORMATION
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $coc_timer=Timer::find(1);
        $e_timer=Timer::find(2);
                
         //Get the list of student's information from personal_informations table,students table,strands table and join them. 
         $person_student = Student::find($id);
         $params = [
             'title' => 'Show Student',
             'students' => $person_student,
             'coc_timer'=> $coc_timer,
             'e_timer'=> $e_timer,
         ];

        return view('admin.students.student_records')->with($params);

    }




    //EDIT STUDENT FORM
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         //Get the list of student's information from personal_informations table,students table,strands table and join them. 
         $coc_timer=Timer::find(1);
         $e_timer=Timer::find(2);
         $person_student = Student::find($id);
         $params = [
            'coc_timer'=> $coc_timer,
            'e_timer'=> $e_timer,
            'title' => 'Edit Student',
             'students' => $person_student,

         ];

        return view('admin.students.student_edit')->with($params);
    }




    //UPDATE STUDENT INFORMATION FROM EDIT STUDENT FORM
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $person_student = Student::find($id);
        $personal_information_id =$person_student->personal_information->id;
        if (!$person_student){
            return redirect()
                ->route('admin.students.index')
                ->with('warning', 'The student you requested for has not been found.');
        }


        $this->validate($request, [
            'lrn_or_id_no' => 'required|unique:personal_informations,lrn_or_id_no,'.$personal_information_id,
            'lastname' => 'required',
            'firstname' => 'required',
            'date_of_birth' => 'required',
            'gender' => 'required',
            'track_and_strand' => 'required',      
            'grade_level' => 'required',
            'section' => 'required',
            'status' => 'required',
        ]);


        //For Student Information who enrolled per school year and semester.
        $person_student->update([ 
            'school_year'=>$request->input('school_year'),
            'semester'=>$request->input('semester'),
            'strand_id'=>$request->input('track_and_strand'),
            'grade_level'=>$request->input('grade_level'),
            'section'=>$request->input('section'),
            'status'=>$request->input('status'),
        ]);

        // For Personal Information
        $personal_info=$person_student->personal_information()
            ->update([   
                'lrn_or_id_no'=>$request->input('lrn_or_id_no'),
                'lastname'=>$request->input('lastname'),
                'firstname'=>$request->input('firstname'),
                'middlename'=>$request->input('middlename'),
                'suffix'=>$request->input('suffix'),
                'date_of_birth'=>$request->input('date_of_birth'),
                'gender'=>$request->input('gender'),
                'address'=>$request->input('address'),
                'contact_no'=>$request->input('contact_no'),
                'photo'=>$request->input('photo'),
                'person_type'=>$request->input('type'),
        ]);

        //Get the current name of the student.
        $person_name = PersonalInformation::find($personal_information_id);
        $name= $person_name->lastname.", ".$person_name->firstname." ".$person_name->middlename." ".$person_name->suffix;
                        
       

        /*******************************FOR TESTING ********************************
          
            For Student Information who enrolled per school year and semester.
            Can update student only if this is the method you will use.

            $person_student->school_year=$request->input('school_year');
            $person_student->semester=$request->input('semester');
            $person_student->strand_id=$request->input('track_and_strand');
            $person_student->grade_level=$request->input('grade_level');
            $person_student->section=$request->input('section');
            $person_student->status=$request->input('status');
        

            For Personal Information
            ...But Can't update its corresponding personal information(relationship) if you will use this method.

            $person_student->personal_information->lrn_or_id_no=$request->input('lrn_or_id_no');
            $person_student->personal_information->lastname=$request->input('lastname');
            $person_student->personal_information->firstname=$request->input('firstname');
            $person_student->personal_information->middlename=$request->input('middlename');
            $person_student->personal_information->suffix=$request->input('suffix');
            $person_student->personal_information->date_of_birth=$request->input('date_of_birth');
            $person_student->personal_information->gender=$request->input('gender');
            $person_student->personal_information->address=$request->input('address');
            $person_student->personal_information->contact_no=$request->input('contact_no');
            $person_student->personal_information->photo=$request->input('photo');
            $person_student->personal_information->person_type=$request->input('type');
            
            $person_student->save();

        *****************************************************************************/
            
        return redirect()->route('admin.students.index')->with('success', "The Student <strong> $name </strong> has successfully been updated.");

    }



    //DELETE STUDENT FORM
    public function delete($id)
    {
        $coc_timer=Timer::find(1);
        $e_timer=Timer::find(2);
         //Get the list of student's information from personal_informations table,students table,strands table and join them. 
         $person_student = Student::find($id);
         $params = [
             'title' => 'Delete Student',
             'students' => $person_student,
             'coc_timer'=> $coc_timer,
             'e_timer'=> $e_timer,
         ];

         return view('admin.students.student_delete')->with($params);

    }


    //DESTROY STUDENT FROM DELETE STUDENT FORM
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $person_student = Student::find($id);
        
        $name= $person_student->personal_information->lastname.", ".$person_student->personal_information->firstname." ".$person_student->personal_information->middlename." ".$person_student->personal_information->suffix;

        if (!$person_student){
            return redirect()
                ->route('admin.students.index')
                ->with('warning', 'The student you requested for has not been found.');
        }

        $person_student->delete();

        return redirect()->route('admin.students.index')->with('success', "The Student <strong> $name </strong> has successfully been deleted.");
    }

    
    
    //SHOW THE LIST OF STUDENTS ACCOUNT
    public function useraccount()
    {
        return view('admin.students.students_user_account_list');
    }

    public function studentvote(){
          //Get the list of student's information from personal_informations table,students table and strands table using eloquent relationship. 
        //   $students = PersonalInformation::join('students','personal_informations.id','=','students.personal_information_id')
        //     ->select('students.id','personal_informations.lastname','personal_informations.firstname')
        //     ->get();
        $coc_timer=Timer::find(1);
        $e_timer=Timer::find(2);
         $person_student = Student::All();
          $params = [
              'title' => 'Students List',
              'coc_timer'=> $coc_timer,
              'e_timer'=> $e_timer,
              'students' => $person_student,
          ];
          return view('admin.studentvotestatus')->with($params);
    }
    

}
