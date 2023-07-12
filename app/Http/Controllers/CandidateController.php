<?php

namespace App\Http\Controllers;
use App\Models\Candidate;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function index(){
        return view('home');
    }

    public function create(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:candidates|max:255',
            'email' => 'required|regex:/(.+)@(.+)\.(.+)/i',
        ]);

        $user = new Candidate;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->address = $request->input('addrs');
        $user->qualification = $request->input('qualify');
        $user->experience = $request->input('exp');
        $user->skill_set = $request->input('skill');
        $user->preferred_salary = $request->input('salary');
        $user->Notice_period = $request->input('notice');
        $user->current_salary = $request->input('csalary');
        $user->interview_date = date('Y-m-d', strtotime($request->input('inter')));
        $user->interview_feedback = $request->input('feed');
        $user->save();
        return redirect('/candidate/create')->with('message', 'Record created successfully!');
        
    }

    public function list(){
        $candidate = Candidate::all();
        return view('list',compact('candidate'));
    }

    public function select(){
        $candidate = Candidate::all();
        return view('select',compact('candidate'));
    }

    public function update(Request $request){
        // print_r($request->cand);exit;
        // $input->name = $request->cand;
        // $input->comments = $request->cmd;
        // $input->status = $request->status;

        $user = Candidate::find($request->cand);
        $user->status = $request->status;

        $user->save();
        return redirect('/');
    }
}
