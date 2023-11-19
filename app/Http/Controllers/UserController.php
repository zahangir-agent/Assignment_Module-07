<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
function showmessage()
{
return "'Hello, Laravel!'.";

}

function callPerson(){
    return view("person");
}

function createPerson(Request $request){
    $name=$request->input("name");
    $email=$request->input("email");
    $mobile=$request->input("mobile");
    return response("Name {$name} and email is {$email} and mobile {$mobile}" ,200);
}

}
