<?php

namespace App\Http\Controllers;

use App\Models\project;
use App\Models\User;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Xml\Project as XmlProject;

class projectController extends Controller
{
    public function index()
    {
        return view(
            'home',
            [
                'project' => project::all(), 
            ]
            );
    }

    public function create ()
    {
        return view("project");
    }

    public function store()
    {
        $data = request()->validate([
            'name'=> ['required'],
            'done'=> ['required'],
            'Start_date'=> ['required'],
            'End_date'=> ['required'],
            'user_id'=> ['required']
            
        ]);

     

        Project::create($data);
        
        return redirect('/home');


    }

    public function get()
    {
        $user = User::id();
        $project = project::all()->where('user_id', $user);
        return view('Home', [
            'project' => $project,
        ]);
    }


    public function getEdit(project $project)
    {
        $Users = User::all();
        return view('projectEdit', [
            'project' => $project,
            'users' => $Users
        ]);



    }


    public function putEdit(Request $request, project $project)
    {
        $project->name = $request->input('name');
        $project->done = $request->input('done');
        $project->Start_date = $request->input('Start_date');
        $project->End_date = $request->input('End_date');
        $project->user_id = $request->input('selUser');
        $project->save();
        return redirect()->route('home');
    }


    public function getDelete(project $project)
    {
        return view('projectDelete', ['project' => $project]);
    }

    // public function deleteDelete(XmlProject $project)
    // {
    //     $project->delete();
    //     return redirect()->route('home');
    // }

}

