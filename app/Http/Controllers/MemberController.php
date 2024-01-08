<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Closure;
// use App\Rules\Uppercase;
// use App\Http\Requests\MemberRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class MemberController extends Controller
{
    public function addUser(Request $req)
    {
        $req->validate([
            'username'=>['required', function(string $attribute,mixed $value, Closure $fail) : void {
                if(strtoupper($value) !== $value){
                    $fail('The :attribute hs fsdfsdfsd');
                }
            }],
            'email'=>'required',
            'age'=>'required | numeric',
            // 'start_date' => 'required|date|after:tomorrow',
            // 'finish_date' => 'required|date|after:start_date',
            'password' => [
                'required',
                'min:6'
            ]
            ]);
        return $req->all();
        // return $req->except(['username','email']);
        // return $req->only(['username','email']);
    }
    public function show(){
        $date = now();
        // if(DB::table('members')->where('id',1)->exists()){
            // if(DB::table('members')->where('id',1)->doesntExist()){
            $members = DB::table('members')
                        // ->count();
                        // ->sum('id');
                        // ->average('id');
                        // ->max('id');
                        ->min('id');
                        // ->latest()
                        // ->inRandomOrder()
                        // ->limit(3)
                        // ->offset(3)
                        // ->oldest()
                        // ->first();
                        // ->orderBy('name')
                        // ->get();
                        // ->paginate(2);
            return $members;
        // }else{
        //     return 'No data exists';
        // }
        
        // $members = DB::table('members')->find(2);
        // return $members;
        // $members = DB::table('members')
                    // ->select('city')
                    // ->pluck('name'); //return Array
                    // ->pluck('name','email'); //return Array
                    // ->distinct('city')
                    // ->where('name','like','O%')
                    // ->whereBetween('id',[1,3])
                    // ->whereIn('id',[2,5,6])
                    // ->get();
        // $members = DB::table('members')->get();
        // $members = DB::table('members')->whereDate('created_at','<=',$date)->get();
        // $members = DB::table('members')->whereDay('created_at','05')->get();
        // $members = DB::table('members')->get();
        // $members = DB::table('members')->find(1);
        // return $members;
        // return view('allusers',['data'=>$members]);
        // DD($members);
        // dump($members);
        // DD($members);
    }
    public function singleUser(string $id){
        $member = DB::table('members')->where('id',$id)->get();
        // $member = DB::table('members')->find($id);
        return view('singleuser',['data'=>$member]);
    }
 
}
