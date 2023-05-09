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
        $subjectsInfo = $request->validate([
            'name' => 'required',
            'code' => 'required',
            'description' => 'required',
            'schedule' => 'required',
            'venue' => 'required',
        ]);

        $subjectsInfo['created_by'] = auth()->user()->email;
        $subjectsInfo['program_id'] = $request->program_id;

        Wp_subject::create($subjectsInfo);
        
        return redirect()->route('subjects.index', $request->program_id)->with('message', 'Subject Successfully Added');
    }

    public function edit(Wp_subject $subject)
    {
        return view('main.subjects.edit', [
            'subject' => $subject
        ]);
    }

    public function update(Wp_subject $subject, Request $request)
    {
        $subjectsInfo = $request->validate([
            'name' => 'required',
            'code' => 'required',
            'description' => 'required',
            'schedule' => 'required',
            'venue' => 'required',
        ]);

        $subject->update($subjectsInfo);
        
        return redirect()->route('subjects.index', $subject->program_id)->with('message', 'Subject Successfully Added');
    }

    public function destroy(Wp_subject $subject)
    {
        $subject->delete();
        
        return redirect(route('subjects.index', $subject->program_id))->with('message', 'Subject Successfully Deleted');
    }

}
