<?php
namespace App\Http\Controllers\Asteria;
use App\Http\Controllers\Controller;
use App\Models\UserRegister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
class IncController extends Controller
{
public function lox()
{
$users=UserRegister::all()->count();
return view('layouts.asteria_layouts',[
'users'=>$users,
]);
}
public function index()
{
return view('asteria_inc.register');
}
public function show()
{
return view('asteria_inc.login');
}
public function store(Request $request)
{
        $validatedData = $request->validate
        ([
            'username' => 'required',
            'password' => 'required',
        ]);
    $credentials = $request->only('username', 'password');
    $remember = $request->has('remember');
        $user = UserRegister::where('username', $validatedData['username'])->first();
            if ($user && $validatedData['password'] === $user->password)
            {
                return redirect()->route('main');
                
                if ($remember)
                {
                    $request->session()->put('user', $user);
                    return redirect()->route('main');
                }
            }
        return back();
}
public function review(Request $request)
{
$valid=$request->validate([
'username'=>[ 'required','bail','min:5','max:50',Rule::unique('user_registers')->ignore($request->id)],
'email'=>['required','bail','email', Rule::unique('user_registers')->ignore($request->id)],
'password' => 'required|confirmed|min:6|max:20',
'password_confirmation'=>'required|min:6|max:20',
]);
$review=new UserRegister();
$review->username=$request->username;
$review->email=$request->email;
$review->password=$request->password;
$review->confrim_password=$request->password_confirmation;
$review->save();
return redirect()->route('asteria_login');
}
}