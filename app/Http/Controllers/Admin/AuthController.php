<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm(){

        if(Auth::guard('admin')->check() === true){
            return view('admin.modules.root.index');
        }

        return view('admin.modules.login.login', [
            'head' => 'Login Administrativo'
        ]);
    }

    public function home()
    {
        return view('admin.modules.root.index', ['head' => 'Painel Administrativo']);
    }

    public function index()
    {
        return view('admin.modules.root.index');
    }

    public function login(Request $request){

        if(!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            $json['message'] = 'O Email não é invalido';
            return response()->json($json);
        }

        if(in_array('', $request->only('email', 'password'))){
            $json['message'] = 'Informe o email e senha corretamente!';
            return response()->json($json);
        }

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (!Auth::guard('admin')->attempt($credentials)) {
            $json['message'] = 'Ooops, usuário e senha invalido!';
            return response()->json($json);
        }

        if (!$this->isAdmin()) {
            Auth::guard('admin')->logout();
            $json['message'] = 'Ooops, você não tem permissão para estar aqui!';
            return response()->json($json);
        }

        $this->authenticated($request->getClientIp());
        $json['redirect'] = route('admin.home');
        return response()->json($json);

    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }

    private function isAdmin(): bool
    {
        $admin = Admin::where('id', Auth::guard('admin')->user()->id)->first();

        if ($admin->admin == 1) {
            return true;
        } else {
            return false;
        }
    }

    private function authenticated(string $ip){
        $user = Admin::where('id', Auth::guard('admin')->user()->id);
        $user->update([
            'last_login_at' => date('Y-m-d H:i:s'),
            'last_login_ip' => $ip
        ]);
    }

    public function forgotPassword()
    {
        var_dump('forgot-password');
    }
}