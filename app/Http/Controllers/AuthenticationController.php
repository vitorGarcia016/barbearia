<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Service\AuthenticationService;
use App\Models\Cliente;
use App\Models\User;
use GuzzleHttp\Client;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use function Symfony\Component\Clock\now;

class AuthenticationController extends Controller
{

    public function showLoginPage()
    {
        return view("auth.login");
    }

    public function loginSubmit(LoginRequest $request)
    {
        $credentials = $request->validated();
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if(Auth::user()->email_verified_at == null){
                $this->logout($request);

                return back()->withInput()->with("loginError", "Email não verificado!");
            }

            return redirect()->route("home");
        }

        return back()->withInput()->with("loginError", "Login Inválido!");
    }

    public function showRegisterPage()
    {
        return view("auth.register");
    }

    public function registersubmit(RegisterRequest $request){
        $data = $request->validated();
        $roleCliente = 2;

        DB::beginTransaction();

        try {
            $user = new User();
            $user->name = $data["name"];
            $user->cpf = $data["cpf"];
            $user->email = $data["email"];
            $user->date_birth = $data["birthdate"];
            $user->password = bcrypt($data["password"]);
            $user->role_id = $roleCliente;
            $user->save();

            $cliente = new Cliente();
            $cliente->name = $user->name;
            $cliente->user_id = $user->id;
            $cliente->save();
    
            
            Auth::login($user);
            
            event(new Registered($user));
            
            DB::commit();
            
            return redirect()->route("verification.notice");

        } catch (\Exception $e) {
            DB::rollBack();
            abort(500, "Falha ao cadastrar cliente, Fale com o suporte!");
        }


    }


    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route("home");
    }
}
