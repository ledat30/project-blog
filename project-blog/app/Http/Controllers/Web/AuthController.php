<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function formLogin(){
        return view('web.auth.login');
    }
    public function login(Request $request){
        if (Auth::attempt(['account' => $request->account, 'password' => $request->password])) {
            return redirect('/web/home');
        }
        return redirect()->route('web.login')->with('error', 'Failed');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('web.login');
    }
    public function profile()
    {
        return view('web.auth.profile');
    }
    public function updateprofile(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $user = Auth::user();

        $data = [
            'name' => $request->name,
        ];

        if ($request->password) {
            $this->validate($request, [
                'password' => 'required|min:6|max:32',
                'confirm' => 'same:password',
            ]);
            $data['password'] = bcrypt($request->password);
        }

        $user->update($data);
        return redirect()->route('web.profile')->with('success', 'Updated successfully');
    }
    public function formRegistration(){
        return view('web.auth.login');
    }
    public  function registration(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'account'=>'required',
            'password'=>'required',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->account = $request->account;
        $user->password = bcrypt($request->password);
        $user->is_admin = 0;
        $user->save();

        return redirect('web/login')->with('success', 'Registration successfully');
    }
}
