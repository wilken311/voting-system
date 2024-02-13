<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\Timer;
use App\Models\Student;
use App\Models\Vote;
use App\Models\PersonalInformation;
use Illuminate\Support\Facades\DB;

class CandidatesController extends Controller
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
        $candidates = Candidate::orderByRaw("FIELD(position,'President','Vice President','Secretary','Treasurer','Auditor','Business Manager','P.I.O')ASC")->get();

        $params = [
            'title' => 'Candidate',
            'coc_timer'=> $coc_timer,
            'e_timer'=> $e_timer,
            'candidates' => $candidates,

        ];
        return view('admin.candidates_applied')->with($params);



     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        
        
        // $coc_timer=Timer::find(1);
        // $e_timer=Timer::find(2);
        // $person_student = Student::All();
        // $params = [
        //     'title' => 'Students List',
        //     'students' => $person_student,
        //     'coc_timer'=> $coc_timer,
        //     'e_timer'=> $e_timer,
        // ];
        // return view('admin.candidatecreate')->with($params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
                
         $candidate = Candidate::find($id);
         $params = [
             'title' => 'Show Candidate',
             'candidate' => $candidate,
             'coc_timer'=> $coc_timer,
             'e_timer'=> $e_timer,
         ];

        return view('admin.coc_approval')->with($params);


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
        $candidate = Candidate::find($id);

        $params = [
            'title' => 'Candidate',
            'coc_timer'=> $coc_timer,
            'e_timer'=> $e_timer,
            'candidate' => $candidate,

        ];
        return view('admin.coc_delete')->with($params);
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

        $candidate = Candidate::find($id);

        $ApproveResult=$request->input('aprroval');
        $this->validate($request, [
            'aprroval' => 'required',
        ]);

        $candidate->update([ 
            'approval'=>$ApproveResult
        ]);

        if($ApproveResult==2){
            return redirect()->route('admin.candidates.index')->with('success', "The COC has successfully been approved.");
        }
        else if($ApproveResult==1){
            return redirect()->route('admin.candidates.index')->with('error', "The COC has not been approved.");
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

        
        $candidate = Candidate::find($id);

        $candidate->delete();

        return redirect()->route('admin.candidates.index')->with('error', "The COC has successfully been deleted.");
    
    }


    public function voteResult()
    {
        $coc_timer=Timer::find(1);
        $e_timer=Timer::find(2);
        $candidates = Candidate::orderByRaw("FIELD(position,'President','Vice President','Secretary','Treasurer','Auditor','Business Manager','P.I.O')ASC")->get();

        $params = [
            'title' => 'Candidate',
            'coc_timer'=> $coc_timer,
            'e_timer'=> $e_timer,
            'candidates' => $candidates,

        ];
        return view('admin.canididateresult')->with($params);
    }

    

    public function FinalCandidates()
    {
        
        $coc_timer=Timer::find(1);
        $e_timer=Timer::find(2);
        
        $candidates = Candidate::orderByRaw("FIELD(position,'President','Vice President','Secretary','Treasurer','Auditor','Business Manager','P.I.O')ASC")->get();
    
        $params = [
            'title' => 'Candidate',
            'coc_timer'=> $coc_timer,
            'e_timer'=> $e_timer,
            'candidates' => $candidates,
  
        ];
        return view('admin.candidatelist')->with($params);
    }

    //TO BE CHECK
    public function SSGOfficer()
    {
        $coc_timer=Timer::find(1);
        $e_timer=Timer::find(2);
        $candidates = Candidate::orderByRaw("FIELD(position,'President','Vice President','Secretary','Treasurer','Auditor','Business Manager','P.I.O')ASC")->get();

        $vote=PersonalInformation::join('students','personal_informations.id','=','students.personal_information_id')
            ->join('candidates','students.id','=','candidates.student_id')
            ->join('votes','candidates.id','=','votes.candidate_id')
            ->select('personal_informations.id','personal_informations.firstname','personal_informations.lastname','personal_informations.middlename','candidates.position','votes.candidate_id',DB::raw('count(*) as total'))
            ->groupBy('candidates.position','votes.candidate_id')
            ->orderByRaw("FIELD(position,'President','Vice President','Secretary','Treasurer','Auditor','Business Manager','P.I.O')ASC")
            ->orderBy('total','DESC')
       
          
            ->get();
        
        


        //   $vote=Vote::groupBy('candidate_id')
        //     ->get();


        $params = [
            'title' => 'Candidate',
            'coc_timer'=> $coc_timer,
            'e_timer'=> $e_timer,
            'vote' => $vote,
            

        ];
        return view('admin.ssg_officer')->with($params);
    }
    

}
