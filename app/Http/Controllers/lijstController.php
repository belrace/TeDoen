<?php

namespace App\Http\Controllers;

use App\Models\lijst;
use App\Models\User;
use Illuminate\Http\Request;

class lijstController extends Controller
{
    public function index()
    {
        return view(
            'lijst',
            [
                'lijst' => lijst::all(), 
            ]
            );
    }

    public function create ()
    {
        return view("lijst");
    }

    public function store()
    {
        $data = request()->validate([
            'name'=> ['required'],
            'done'=> ['required'],
            'Project_id'=> ['required'],
            'user_id'=> ['required']
            
        ]);

     

        Lijst::create($data);
        
        return redirect('/home');


    }

    public function get()
    {
        $user = User::id();
        $lijst = lijst::all()->where('user_id', $user);
        return view('Home', [
            'lijst' => $lijst,
        ]);
    }

    public function getEdit(lijst $lijst)
    {
        $Users = User::all();
        return view('lijstEdit', [
            'lijst' => $lijst,
            'users' => $Users

            
        ]);



    }


    public function putEdit(Request $request, lijst $lijst)
    {
        $lijst->name = $request->input('name');
        $lijst->done = $request->input('done');
        $lijst->Project_id = $request->input('Project_id');
        $lijst->user_id = $request->input('selUser');
        $lijst->save();
        return redirect()->route('home');
    }


    public function getDelete(lijst $lijst)
    {
        return view('lijstDelete', ['lijst' => $lijst]);
    }


}
