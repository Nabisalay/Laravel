<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stdModel;

class StudentController extends Controller
{
    //
    public function index() {
        return view('welcome');
    }

    public function about() {
        return view('about');
    }
    public function register() {
        return view('register');
    }
    public function create(Request $request) {
        // print_r($request->all());
        // return view('register');
        $request->validate([
            'name' => 'required',
            'email' => 'required | email',
            'pass' => 'required',
            'confPass' => 'required'
        ]);

        $stdData = new stdModel();
        $stdData->name = $request['name'];
        $stdData->email = $request['email'];
        $stdData->password = $request['pass'];
        $stdData->save();
        return redirect('/register');
    }

    public function studentView() {
        $data = stdModel::all();
        $stdData = compact('data');
        return view('viewStudent')->with($stdData);
    }
}
