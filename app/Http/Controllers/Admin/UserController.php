<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\Admin\Users;

class UserController extends Controller
{
    public function login()
    {
       return view('admin.user.login');
    }
    function register()
    {
        return view('admin.user.register');
    }
    function createUser(Request $req)
    {
        $validation = $req->validate([
            'f_name'=> 'required|alpha',
            'l_name'=> 'required|alpha',
            'email'=> 'required|unique:users,email|email',
            'phone'=> 'required|min:10|max:10|unique:users,phone',
            'password'=> 'required|min:8'
        ]);
        // create row into db 
        $data = new Users();
        $data->f_name = $req->post('f_name');
        $data->l_name = $req->post('l_name');
        $data->email = $req->post('email');
        $data->phone = $req->post('phone');
        $data->password = $req->post('password');
        $data->save();
        echo 'OK';
    }
}

