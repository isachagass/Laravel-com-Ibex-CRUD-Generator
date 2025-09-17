<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    
    public function show_login()
    {
        $a = random_int(0, 10);
        $b = random_int(0,10);

        session(['captch_result' => ($a + $b)]);
        return view('login', ['captcha' => "$a + $b = ?"]);
        
    }
    
    public function login(Request $request)
    {
        
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'captcha' => 'required'
        ]);

        if($request->captcha != session('captch_result')){
            return back()->withErrors(['erro' => "captch errado"])->withInput();
        }

        session()->forget('captcha_result');
        

        if(!session()->has('tentativas')){
            session(['tentativas' => 0]);
        }

        if(session()->has('tempo_bloqueado')){
            // verifica o tempo
            if(Carbon::now()->lessThan(Carbon::parse(session('tempo_bloqueado')))){
                return back()->withErrors(['erro' => "'muitas tentativas!'"])->withInput()->with(['bloqueado' => true]);
            } else{
                session()->forget(['tempo_bloqueado', 'tentativas']);
                return back()->withErrors(['erro' => "Tente novamente!"]);
            }
        }

        // $bloqueado_ate = session('tempo_bloqueado');

        $user = User::where('email', $request->email)->first();

        if(empty($user) || $user->password != $request->password){
            session(['tentativas' => session('tentativas')+1]);

            if(session('tentativas') == 2){
                return back()->withErrors(['erro' => "voce tem apenas mais uma tentativa"])->withInput();
            }
            if(session('tentativas') >= 3){
                session(['tempo_bloqueado' => Carbon::now()->addSeconds(30)]);
                return back()->withErrors(['erro' => 'muitas tentativas!'])->withInput()->with(['bloqueado' => true]);

            }

            return back()->withErrors(['erro' => "usuario ou senha invalido!"])->withInput();
            
        }

        // auth()->login($user);
        session()->forget('tentativas', 'tempo_bloqueado');
        
        $token = Str::random(100);
        $user->token = $token;
        $user->save();
        session(['user_token' => $token]);
        
        return redirect('/events');



        
    }


    public function logout() {
        $user = User::where('token', session('user_token'))->first();
        $user->token = null;
        $user->save();
        auth()->logout();

        session()->invalidate();
        return redirect('/login');
        
    }
}
