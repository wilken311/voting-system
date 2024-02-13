<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\Vote;
use App\Models\Student;
use App\Models\Timer;
use App\Models\PersonalInformation;
use Illuminate\Support\Facades\Auth;
class VoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //timer
        $coc_timer=Timer::find(1);
        $e_timer=Timer::find(2);


        $student_id=Auth::user()->usercode->personal_information->students[0]->id;

        $vote=Vote::where('student_id','=',$student_id)->first();

       
        if (is_null($vote)) {
            $candidates = Candidate::orderByRaw("FIELD(position,'President','Vice President','Secretary','Treasurer','Auditor','Business Manager','P.I.O')ASC")->get();
            $params = [
                'coc_timer'=> $coc_timer,
                'e_timer'=> $e_timer,
                'title' => 'NotYetVote',
                'candidates' => $candidates,
            ];
        }
        else{
            $choosenCandidates = PersonalInformation::join('students','personal_informations.id','=','students.personal_information_id')
            ->join('candidates','candidates.student_id','=','students.id')
            ->join('votes','candidates.id','=','votes.candidate_id')
            ->select('personal_informations.lastname','personal_informations.firstname','personal_informations.middlename','candidates.id','candidates.position')
            ->orderByRaw("FIELD(position,'President','Vice President','Secretary','Treasurer','Auditor','Business Manager','P.I.O')ASC")
            ->where('votes.student_id',$student_id)
            ->get();

            
            $params = [
                'coc_timer'=> $coc_timer,
                'e_timer'=> $e_timer,
                'title' => 'Vote',
                'choosenCandidates' => $choosenCandidates,
            ];        
        }
        return view('student.vote')->with($params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'president' => 'required',
            'vice_president' => 'required',
            'secretary' => 'required',
            'treasurer' => 'required',
            'auditor' => 'required',
            'business_manager' => 'required',      
            'pio' => 'required',
          
            ]
        );
        
        $student_id=Auth::user()->usercode->personal_information->students[0]->id;
        $president=$request->input('president');
        $vice_president=$request->input('vice_president');
        $secretary=$request->input('secretary');
        $treasurer=$request->input('treasurer');
        $auditor=$request->input('auditor');
        $business_manager=$request->input('business_manager');
        $pio=$request->input('pio');
        
        $myArray = array(
            $president,
            $vice_president,
            $secretary,
            $treasurer,
            $auditor,
            $business_manager,
            $pio,
        );

        foreach ($myArray as $value) {
            $vote = Vote::create([
                'student_id' =>  $student_id,
                'candidate_id' => $value,
            ]);
        }
    

        return redirect()->route('student.votes.index')->with('success', "Your vote has successfully been submitted.");
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

    public function voteResult()
    {
        $candidates = Candidate::orderByRaw("FIELD(position,'President','Vice President','Secretary','Treasurer','Auditor','Business Manager','P.I.O')ASC")->get();
        $coc_timer=Timer::find(1);
        $e_timer=Timer::find(2);
        $params = [
            'coc_timer'=> $coc_timer,
            'e_timer'=> $e_timer,
            'title' => 'Candidate',
            'candidates' => $candidates,

        ];
        return view('student.voteresult')->with($params);
    }
}
