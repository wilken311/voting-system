<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Timer;
use App\Models\PersonalInformation;
use App\Models\UserCode;

use App\Models\Role;


class VoteCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $coc_timer=Timer::find(1);
        $e_timer=Timer::find(2);
          

          $student = PersonalInformation::join('students','personal_informations.id','=','students.personal_information_id')
          ->join('user_codes','user_codes.personal_information_id','=','personal_informations.id')
          ->leftjoin('users','users.user_code_id','=','user_codes.id')
          ->select('personal_informations.id','personal_informations.firstname','personal_informations.lastname','personal_informations.middlename','user_codes.code','users.email')
          ->get();



          $params = [
           
            'coc_timer'=> $coc_timer,
            'e_timer'=> $e_timer,
            'students'=> $student
    
        ];
          return view('admin.students.votercode_list')->with($params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $coc_timer=Timer::find(1);
        $e_timer=Timer::find(2);
        
       
        $student = PersonalInformation::leftjoin('user_codes','user_codes.personal_information_id','=','personal_informations.id')
        ->select('personal_informations.id','personal_informations.firstname','personal_informations.lastname','personal_informations.middlename','user_codes.code')
        ->get();

        $params = [
            'title' => 'Students List',
            'coc_timer'=> $coc_timer,
            'e_timer'=> $e_timer,
            'students' =>$student,
        ];
        return view('admin.students.votecode_create')->with($params);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'code' => 'required|unique:user_codes',
            ]
        );

        
        //For UserCode
        $usercode = new UserCode;
        $usercode->personal_information_id=$request->input('person_id');
        $usercode->code=$request->input('code');
        $usercode->save();

        //For Role_User_Code
        $usercode_role = new Role;
        $usercode_role->id=3;
            
     
        $usercode->roles()->sync($usercode_role);

        //Return back to the Code List
        return redirect()->route('admin.votes.index')->with('success', "The code has successfully been created.");

    }

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
        
       
        $student= PersonalInformation::find($id);

        $params = [
            'title' => 'Students List',
            'coc_timer'=> $coc_timer,
            'e_timer'=> $e_timer,
            'students' =>$student,
        ];
        return view('admin.students.vote_delete')->with($params);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $coc_timer=Timer::find(1);
        $e_timer=Timer::find(2);
        
       
        $student= PersonalInformation::find($id);

        $params = [
            'title' => 'Students List',
            'coc_timer'=> $coc_timer,
            'e_timer'=> $e_timer,
            'students' =>$student,
        ];
        return view('admin.students.votecode_edit')->with($params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        
        if ($id=="1"){
            $timer = Timer::find(1);
        }
        else{
            $timer = Timer::find(2);          
        }


        $this->validate($request, [
            'newdate' => 'required',
            'enddate' => 'required',
        
        ]);

        $timer->update([ 
         
            'date_started'=>$request->input('newdate'),
            'date_ended'=>$request->input('enddate'),
      
        ]);

           
        if ($id=="1"){
            return redirect()->route('admin.votes.candidacy')->with('success', "The schedule has successfully been updated.");

        }
        else{
            return redirect()->route('admin.votes.timer')->with('success', "The schedule has successfully been updated.");
          
        }


        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $student_usercode = UserCode::find($id);
        $student_usercode->delete();
        return redirect()->route('admin.votes.index')->with('success', "The Student code has successfully been deleted.");
    
    }
    public function timer()
    {
        //timer
        $coc_timer=Timer::find(1);
        $e_timer=Timer::find(2);
        $params = [
            'coc_timer'=> $coc_timer,
            'e_timer'=> $e_timer,
        ];
        return view('admin.timer')->with($params);
    }

    public function candidacy()
    {
        //timer
        $coc_timer=Timer::find(1);
        $e_timer=Timer::find(2);
        $params = [
            'coc_timer'=> $coc_timer,
            'e_timer'=> $e_timer,
        ];
        return view('admin.candidacy_coc')->with($params);
    }



    public function updateVotersCode(Request $request, $id)
    {
        $this->validate($request, [
            'code' => 'required|unique:user_codes',
            ]
        );
        $student_code=UserCode::find($id);
        $student_code->update([ 
         
            'code'=>$request->input('code'),
      
        ]);

        return redirect()->route('admin.votes.index')->with('success', "The code has successfully been updated.");
        
    }

    
}
