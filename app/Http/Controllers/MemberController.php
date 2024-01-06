<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function addUser(Request $req)
    {
        $req->validate([
            'username'=>'required | lowercase | max:2',
            'email'=>'required',
            'age'=>'required | numeric',
            'password' => [
                'required',
                'min:6'
            ]
        ],[
            'username.required'=>'Must be user name.',
            'username.lowercase'=>"hi"
        ]);
        return $req->all();
    }
    // public function showMember(){
    //     return view('homePage');
    // }
    // public function userMember(string $id)
    // {
    //     // return view('user',['id'=>$id]);
    //     return view('user',compact('id'));
    // }
    // public function showBlog()
    // {
    //     return view('blog');
    // }
}
