<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index ()
    {
        $type = 'admin';
        $users=[
            ['username' => 'lama', 'age'  => 23,],
            ['username' => 'hala', 'age'  => 20,],
            ['username' => 'alaa', 'age'  => 21,],
        ];
        return view('welcome', compact('type','users',));
        //var_dump($Request);
        // die();
        // dd($Request ->all());



        //var_dump($Request);
       // die();
       // dd($Request ->all());

    }
    public function show(){
        return view('welcome');
    }




    //
}
