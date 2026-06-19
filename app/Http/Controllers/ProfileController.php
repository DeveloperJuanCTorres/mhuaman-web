<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        $company = Company::first();
        return view('profile.index', compact('company'));
    }

    public function update(Request $request)
    {

        $request->validate([

            'name'=>'required|max:255',

            'current_password'=>'nullable|required_with:password',

            'password'=>'nullable|confirmed|min:8'

        ]);


        $user=auth()->user();

        $user->name=$request->name;


        if($request->filled('password')){

            if(!Hash::check($request->current_password,$user->password)){

                return back()->withErrors([

                    'current_password'=>'La contraseña actual no es correcta.'

                ]);

            }

            $user->password=Hash::make($request->password);

        }

        $user->save();

        return back()->with('success','Perfil actualizado.');

    }
}
