<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\User;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function index()
    {
        return view(
            'category',
            [
                'category' => category::all(), 
            ]
            );
    }

    public function create ()
    {
        return view("category");
    }

    public function store()
    {
        $data = request()->validate([
            'name'=> ['required'],
            'user_id'=> ['required']
            
        ]);

     

        category::create($data);
        
        return redirect('/home');


    }

    public function get()
    {
        $user = User::id();
        $category = category::all()->where('user_id', $user);
        return view('Home', [
            'category' => $category,
        ]);
    }


    public function getEdit(category $category)
    {
        $Users = User::all();
        return view('categoryEdit', [
            'category' => $category,
            'users' => $Users
        ]);



    }


    public function putEdit(Request $request, category $category)
    {
        $category->name = $request->input('name');
        $category->user_id = $request->input('selUser');
        $category->save();
        return redirect()->route('home');
    }


    public function getDelete(category $category)
    {
        return view('categoryDelete', ['category' => $category]);
    }
}
