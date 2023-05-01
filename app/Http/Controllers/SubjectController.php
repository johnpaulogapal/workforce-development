<?php

namespace App\Http\Controllers;

use App\Wp_program;
use App\Wp_subject;
use Illuminate\Http\Request;
use Carbon\Carbon;

class SubjectController extends Controller
{

    public function index(Wp_program $program)
    {
        return view('main.subjects.index', [
            'program' => $program,
            'subjects' => Wp_subject::all(),
        ]);
    }

    public function create(Wp_program $program)
    {
        return view('main.subjects.create', [
            'program' => $program
        ]);
    }

    public function store(Request $request)
    {
        $programsInfo = $request->validate([
            'name' => 'required',
            'code' => 'required',
            'description' => 'required',
            'from' => 'required',
            'to' => 'required',
            'venue' => 'required',
        ]);

        $programsInfo['duration'] = $this->computeDuration($request->from, $request->to);
        $programsInfo['created_by'] = auth()->user()->email;
        $programsInfo['program_id'] = $request->program_id;

        Wp_subject::create($programsInfo);
        
        return redirect()->route('subjects.index', $request->program_id)->with('message', 'Subject Successfully Added');
    }

    function computeDuration($fromDate, $toDate) {
        $from = Carbon::createFromFormat('Y-m-d', $fromDate);
        $to = Carbon::createFromFormat('Y-m-d', $toDate);
        $duration = $to->diffInDays($from);
        return $duration;
    }
}
