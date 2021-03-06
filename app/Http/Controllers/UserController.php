<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index()
    {


            $users=User::latest()->get();

            return view('users.index')->with('users', $users);

    }
    public function create()
    {
        return view('users.create');
    }
    public function store(UserRequest $request) {

        User::create([
             'name' => $request->name,
             'email' => $request->email,
             'is_admin'=>$request->is_admin,
             'password'=> Hash::make($request->password)

         ]);
         Session::flash('success_message', 'Operation effectuer avec success');
         return redirect()->route('users');

     }
     public function edit(User $user)
     {

     return view('users.edit')->with('user',$user);
     }
     public function update(UserUpdateRequest $request)
     {
        if($request->password)
        {
            $request->validate([
                'password'=>'required|min:6|confirmed'
            ]);
            User::findorfail($request->id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'is_admin'=>$request->is_admin,
                'password' =>Hash::make($request->password),
            ]);
        }else{
            User::findorfail($request->id)->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);
        }
        Session::flash('success_message', 'Operation effectuer avec success');
         return redirect()->route('users');
     }

     public function delete($id)
     {
      User::findorfail($id)->delete();

        Session::flash('success_message', 'Operation effectuer avec success');
         return redirect()->route('users');
     }
}
