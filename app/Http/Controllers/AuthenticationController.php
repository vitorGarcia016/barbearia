<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Service\AuthenticationService;
use App\Models\Cliente;
use App\Models\User;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use function Symfony\Component\Clock\now;

class AuthenticationController extends Controller
{

    public function showLoginPage()
    {
        return view("login");
    }

    public function loginSubmit(LoginRequest $request)
    {
        $credentials = $request->validated();
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();

            $roleUserLogged = $user->role->code;
            $roleBarbeiroCode = 1;
            $roleClienteCode = 2;
            $roleAdminCode = 3;

            $routeRedirect = "";

            if ($roleUserLogged == $roleBarbeiroCode) {
                $routeRedirect = "barbeiro";
            } elseif ($roleUserLogged == $roleClienteCode){
                $routeRedirect = "cliente";
                $user
                    ->cliente
                    ->update(["last_access" => date("Y-m-d H-i-s")]);

            } elseif ($roleUserLogged == $roleAdminCode) {
                $routeRedirect = "admin";
            }

            return redirect()->to($routeRedirect);
        }

        return back()->withInput()->with("loginError", "Login Inválido!");
    }

    public function showRegisterPage()
    {
        return view("register");
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
    
            DB::commit();

            return redirect()->to("login");

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
