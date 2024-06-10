<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\DB;
class rcontroller extends Controller
{
    public function store(Request $request)
    {
        $request ->validate([
            'email' => ['required', 'string'],
            'password' => ['required', 'string']
        ]);
        if (Auth::attempt($request->only('email','password'))) {
            return redirect()->route('osn');
        }
        
        else {
            return back();
        }
    }
    public function create()
    {
        return view("welcome");
    }
    public function authstore(Request $request)
    {
        $request ->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'unique:users'],
            'password' => ['required', 'confirmed', 'min:4']

        ]);
        $user = User::create([
            "name"=> $request->name,
            "email"=> $request->email,
            "password"=> hash::make($request->password)

        ]);
        auth::login($user);

        return redirect('osn');
    }
    public function destroy(Request $request){
        Auth::logout();
        
        return redirect()->route('welcome');
    }
    public function index(){
        $users = DB::table('users')->get();
  
        foreach($users as $key => $user){
           if($user['id'] == 1){
              $user[$key]['group'] = 'admin';
           }
        }
  
        return view('user.index', ['users' => $users]);
     }
     public function profileindex()
    {
        return view('profile');
    }
    public function profilestore(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'confirm_password' => 'required_with:password|same:password',
            'avatar' => 'image',
        ]);
  
        $input = $request->all();
          
        if ($request->hasFile('avatar')) {
            $avatarName = time().'.'.$request->avatar->getClientOriginalExtension();
            $request->avatar->move(public_path('avatars'), $avatarName);
  
            $input['avatar'] = $avatarName;
        
        } else {
            unset($input['avatar']);
        }
  
        if ($request->filled('password')) {
            $input['password'] = Hash::make($input['password']);
        } else {
            unset($input['password']);
        }
  
        auth()->user()->update($input);
    
        return back()->with('success', 'Profile updated successfully.');
    }
}
