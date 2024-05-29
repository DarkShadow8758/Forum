<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // camelCase
    public function listAllUsers()
    {
        //Lógica
        return view('users.listAllUsers');
    }
    public function createUser() 
    {
        return view('users.createUser');
    }
    public function listUsersByID()
    {
       return view('users.listUsersByID');
    }
    public function updateUser()
    {
        return view('users.updateUser');
    }
    public function deleteUser()
    {
        return view('users.deleteUser');
    }
}
