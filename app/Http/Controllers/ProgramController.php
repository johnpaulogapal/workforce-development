<?php

namespace App\Http\Controllers;

use App\Wp_program;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ProgramController extends Controller
{
    
    public function index()
    {
        return view('main.programs.index', [
            'programs' => Wp_program::all(),
        ]);
    }

    public function create()
    {
        return view('main.programs.create');
    }

    public function store(Request $request)
    {
        $programsInfo = $request->validate([
            'name' => 'required',
            'duration' => 'required',
        ]);

        $programsInfo['created_by'] = auth()->user()->email;

        Wp_program::create($programsInfo);
        
        return redirect()->route('programs.index')->with('message', 'Program Successfully Added');
    }
    
    public function edit(Wp_program $program)
    {
        return view('main.programs.edit', [
            'program' => $program,
        ]);
    }

    public function update(Wp_program $program, Request $request)
    {
        $programsInfo = $request->validate([
            'name' => 'required',
            'duration' => 'required',
        ]);

        $program->update($programsInfo);
        
        return redirect()->route('programs.index')->with('message', 'Program Successfully Updated');
    }

    public function destroy(Wp_program $program)
    {
        $program->delete();
        
        return redirect(route('programs.index'))->with('message', 'Program Successfully Deleted');
    }

    // Function for the Duration
    // function computeDuration($fromDate, $toDate) {
    //     $from = Carbon::createFromFormat('Y-m-d', $fromDate);
    //     $to = Carbon::createFromFormat('Y-m-d', $toDate);
    //     $duration = $to->diffInDays($from);
    //     return $duration;
    // }

}
