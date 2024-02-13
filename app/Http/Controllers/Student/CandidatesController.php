<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Vote;
use App\Models\Candidate;
use App\Models\Timer;
class CandidatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student_id=Auth::user()->usercode->personal_information->students[0]->id;
        $coc_timer=Timer::find(1);
        $e_timer=Timer::find(2);
        $candidate=Candidate::where('student_id','=',$student_id)->first();
        $ExistingCandidate=Candidate::where('student_id','=',$student_id)->count();
        
        $params = [
            'coc_timer'=> $coc_timer,
            'e_timer'=> $e_timer,
            'title' => 'C0C',
            'candidate' => $candidate,
            'ExistingCandidate' => $ExistingCandidate,
       
       
        ];
        return view('student.apply_coc')->with($params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
       
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
            'position' => 'required',
            'checked' => 'required'
            ]
        );
        
        $student_id=Auth::user()->usercode->personal_information->students[0]->id;
        
       

        $vote = Candidate::create([
                    'student_id' =>  $student_id,
                    'position' => $request->input('position'),
               
        ]);
        
        return redirect()->route('student.candidates.index')->with('success', "Your application has successfully been submitted.");
            
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
     
  


   
}
