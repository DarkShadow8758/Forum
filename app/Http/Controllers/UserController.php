<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\facades\Validator;
use App\Models\User;

class UserController extends Controller
{
    // camelCase
    public function listAllUsers(Request $request)
    {
        $users = User::all(); // Busca todos os usuários
        return view('users.listAllUsers', ['users' => $users]);//, ['users' => $users]); // Retorna a view com os dados dos usuários
    }

    public function showAuthForm(Request $request) {
        return view('auth.auth');
    }
    //novo
    public function registerUser(Request $request) {
        if ($request->method() === 'POST') {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8|confirmed',
            ]);
    
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
    
            Auth::login($user);
    
            return redirect()->route('listAllUsers')->with('success', 'Registro realizado com sucesso');
        }
    
        return $this->showAuthForm($request);
    }
   /* public function registerUser(Request $request) {
        if ($request->method() === 'GET') {
            return view('users.createUser'); //return view('users.register.registerUser');
        } else {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8|confirmed',
            ]);
    
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
    
            Auth::login($user);
    
            return redirect()->route('listAllUsers')->with('success', 'Registro realizado com sucesso');;
        }
    }*/
    public function profileUser(Request $request)//, $uid
    {
         //procurar o usuário no banco
         //$user = User::where('id', $uid)->first();
         //aaaaaAAAAAAAAAAAAAAAAAAA
        return view('users.profile');//, ['user' => $user]);
    }
    public function listUser( Request $request, $uid)
    {
        //procurar o usuário no banco
        $user = User::where('id', $uid)->first();
        //aaaaaAAAAAAAAAAAAAAAAAAA
       return view('users.profileEdit', ['user' => $user]);
    }
    public function updateUser(Request $request, $uid)
    {
        $user = User::where('id', $uid)->first();
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password != '')
        {
            $user->password = Hash::make($request->password);
        }
        $request->validate([
            'name'=> 'string|max:255',
            'email'=> 'string|email|max:255',
            'password'=> 'string|min:8|confirmed'
        ]);
        $user->save();
        //return view('users.updateUser');
        return redirect() -> route('listUser', [$user->id]) -> with('message', 'Atualizado com sucesso!');
    }
    public function deleteUser(Request $request, $uid)
    {
        $user = User::where('id', $uid)->delete();
      
        
        //return view('users.updateUser');
        return redirect() -> route('listAllUsers') -> with('message', 'Deletado com sucesso!');
   
    }
}
