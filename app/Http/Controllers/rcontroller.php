<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
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
        dd($request->all());
        auth::login($user);

        return redirect('osn');
    }
    public function destroy(Request $request){
        Auth::logout();
        
        return redirect()->route('welcome');
    }
    public function getUsers()
    {
    $users = User::all(); // Получаем всех пользователей из базы данных
    
    return view('osn', ['name' => $users]); // Передаем данные в представление
    }
}
