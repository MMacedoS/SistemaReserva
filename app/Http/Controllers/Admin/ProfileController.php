<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class ProfileController extends Controller
{

    public function index(Request $request){
        $itens =  User::all();
        return view('profile.index',compact('itens'));
    }

    public function create()
    {

    }
    public function store(Request $request)
    {

    }
    public function show($id)
    {

    }

    public function update(Request $request,$id)
    {

    }

    public function destroy($id)
    {

    }

    public function rules()
    {

    }
}
