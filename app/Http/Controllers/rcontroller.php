<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\Message;
class rcontroller extends Controller
{
    public function store(Request $request)
    {
        $request ->validate([
            'email' => ['required', 'string'],
            'password' => ['required', 'string']
        ]);
        if (Auth::attempt($request->only('email','password'))) {
            $user = User::find(auth()->id());
            if($user->banned == 1){
                Auth::logout();
                return redirect('banned');
            }
            else {
                return redirect('osn');
            }
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
    public function profilestoreadmin(Request $request,$userId)
    {
        $user = User::find($userId);
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
  
        $user->update($input);
    
        return back()->with('success', 'Profile updated successfully.');
    }
    public function profileupdateadmin(Request $request,$userId){
        
    }
    public function banned(Request $request, $userId){
        $user = User::find($userId);
        $user->banned = 1;
        $user->save();
        return redirect()->back()->with('success', 'Пользователь успешно забанен.');
  
    }
    public function unbanned(Request $request, $userId){
        $user = User::find($userId);
        $user->banned = 0;
        $user->save();
        return redirect()->back()->with('success', 'Пользователь успешно разбанен.');
  
    }

    public function showAllUsers()
    {
    $users = User::all();
    return view('osn', ['users' => $users]);
    }
    public function showAllUsersadmin()
    {
    $users = User::all();
    return view('admin', ['users' => $users]);
    }
    public function friendindex(){
        $friends = Auth::user()->friends();
        $requests= Auth::user()->friendrequests();


        return view ('friend',[
            'friends'=>$friends,
            'requests'=>$requests
        ]);
    }
    public function getresults(Request $request){
        $query = $request->input('query');
        if (!$query){
            redirect()->route('friends');
        }
        $users = User::where(DB::raw("CONCAT(name)"),
                            'LIKE',"%{$query}%")->get();

        return view('search.results')->with('users', $users);
    }
    public function getprofile($username){
        $user = User::where('name', $username)->first();

        if (!$user){
            abort(404);
        }

        return view('profile.index',compact('user'));

    }
    public function getadd($username){
        $user = User::where('name', $username)->first();

        if (!$user){
            return redirect()->route('osn')->with('info','пользователь не найден');
        }
        if (Auth::user()->hasfriendrequestspending($user) 
            || $user->hasfriendrequestspending( Auth::user() ) ){
        return redirect()
            ->route('profile.index',['username'=>$user->name])
            ->with('info','пользователю отправлен запрос в друзья');
            
        }
        if (Auth::user()->isfriendwith($user)){
            return redirect()
            ->route('profile.index',['username'=>$user->name])
            ->with('info','пользователь уже в друзьях');
        }
        Auth::user()->addfriend($user);
        return redirect()
            ->back()
            ->with('info','пользователю отправлен запрос в друзья');

    }
    public function getaccept($username){
        $user = User::where('name', $username)->first();

        if (!$user){
            return redirect()->route('osn')->with('info','пользователь не найден');
        }
        if (! Auth::user()->hasfriendrequestrecived($user)){
            return redirect()->route('osn');
        }
        Auth::user()->acceptfriendrequest($user);
        return redirect()
            ->route('search.results',['username'=>$user->name])
            ->with('info','запрос в друзья принят');
    }
    public function postdelete($username){
        $user = User::where('name', $username)->first();
        if (!Auth::user()->isfriendwith($user)){
            return redirect()->back();
        }
        Auth::user()->deletefriend($user);
        return redirect()->back();

    }
    public function chatindex()
    {
    $messages = Message::with('user')->orderBy('created_at')->get()->whereNull('chatroom');
    return view('chat', compact('messages'));
        
        
    }

    public function sendMessage(Request $request)
    {
    $message = new Message();
    $message->user_id = auth()->id();
    $message->content = $request->content;
    $message->save();

    return redirect()->back();
    }
    public function privatechatindex($chatroom)
    {
    $messages = Message::with('user')->orderBy('created_at')->get()
    ->whereNotNull('chatroom')
    ->where('chatroom', '=', $chatroom)
    ;

    return view('privatechat',['chatroom'=>$chatroom], compact('messages'));
    }

    public function privatesendMessage(Request $request,$chatroom)
    {
    $message = new Message();
    $message->user_id = auth()->id();
    $message->content = $request->content;
    $message->chatroom = $chatroom;
    $message->save();

    return redirect()->back();
    }

    
}
