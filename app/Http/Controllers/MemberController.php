<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Closure;
// use App\Rules\Uppercase;
use App\Http\Requests\MemberRequest;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class MemberController extends Controller
{

    public function rawshow()
    {
        $member = DB::table('members')
        ->select(DB::raw('count(*) as member_count'), 'age' ,'username')
        // ->selectRaw('count(*) as member_count , age ,username')
        ->groupByRaw('age,username')
        ->havingRaw('age > ?',[20])
        // ->selectRaw('id,sponsor_id,username,email,age,country')
                // ->orderByRaw('age DESC,username DESC')
                // ->orderByDesc('age')
                // ->whereRaw('id = 5') 
                // ->whereRaw('id = ?',[4])
                ->get();
                // ->toSql();
        return $member;
        // $member = DB::delete('delete from members where id = ?', [10]);
        // $member = DB::update("update members set email='rahim@gmail.com' where id=?",[10]);
        // return $member;
        // $member = DB::insert("insert into members(sponsor_id,username,age,email,name,country,city_id,created_at,updated_at) value(?,?,?,?,?,?,?,?,?)",['sumon01','rahim01',20,'eu@gmail.com','Abdus Salam','India',1,now(),now()]);
        // return $member;
        // $member = DB::select("select * from members");
        // $member = DB::select("select * from members where id = :id",['id'=>1]);
        // $member = DB::select("select username,email,name from members where username like ? && name like ?",['h%','m%']);
        // $member = DB::select("select username,email,name from members where id=?",[1]);
        // foreach($member as $user){
        //     echo $user->username ."<br>";
        // }
        // return $member;

    }


    public function updateMember(MemberRequest $req, string $id){
        // return $id;
        $member = DB::table('members')
                ->where('id',$id)
                ->update([
                    'sponsor_id'=>$req->sponsor_id,
                    'username'=>$req->username,
                    'age'=>$req->age,
                    'email'=>$req->email,
                    'name'=>$req->name,
                    'country'=>$req->country,
                    'city_id'=>$req->city,
                    'created_at'=>now(),
                    'updated_at'=>now()
                ]);
                // ->increment('age',1,['city'=>'London']); //incrementEach
                // ->decrement('age',1,['city'=>'Rajshahi']);   //updateOrInsert increment update
                if($member){
                    return redirect()->route('show');
                }  
                
                    
    }
    public function addUser(MemberRequest $req)
    {
        // return $req;
        $member = DB::table('members')->insert([
            'sponsor_id'=>$req->sponsor_id,
            'username'=>$req->username,
            'age'=>$req->age,
            'email'=>$req->email,
            'name'=>$req->name,
            'country'=>$req->country,
            'city_id'=>$req->city,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        if($member){
            echo "Data successfully added";
            return redirect()->route('show');
        }else{
            echo "Data not added for error";
        }
    }
    public function show(){
            $members = DB::table('members')
                        ->leftJoin('cities',function(JoinClause $join){
                            $join->on('members.city_id','=','cities.id'); })
                        ->select('members.*','cities.city_name')
                        // ->get();
                        // return $members;
                        // ->select('members.*','cities.city_name')
                        // ->join('cities','members.city_id','=','cities.id')
                        // ->select(DB::raw('count(*) as student_count'),'cities.city_name')
                        // ->groupBy('city_name')
                        // ->havingBetween('student_count',[2,3])               //where()
                        // ->get();
                        ->paginate(5);
                        // return $members;
                        // ->fragment('users');
                        // ->appends(['sort' => 'votes']);
                        // ->paginate(3,'*','number',3);
                        // ->simplePaginate(3);
                        // return $members;
        return view('allusers',compact('members'));
        // return view('allusers',['data'=>$members]);
    }
    public function store(){
        $member = DB::table('cities')->get();
        // return $member;
        return view('member',['data'=>$member]);
    }
    public function singleUser(string $id){
        $member = DB::table('members')
                ->leftJoin('cities',function(JoinClause $join){
                    $join->on('members.city_id','=','cities.id'); })
                ->select('members.*','cities.city_name')
                ->where('members.id',$id)
                ->get();
                // ->toSql();
                // return $member;
        // $member = DB::table('members')->find($id);
        return view('singleuser',['data'=>$member]);
    }
    public function deleteUser(string $id)
    {
        $member = DB::table('members')
                    ->where('id',$id)
                    ->delete();
        if($member){
            return redirect()->route('show');
        }        
    }
    public function editUser(string $id)
    {
        $member = DB::table('members')
                    ->find($id);
        $cities = DB::table('cities')->get();
        return view('edit',['data'=>$member,'cities'=>$cities]);
    }
    public function whenMethod(){
        $member = DB::table('members')
                // ->when(true, function($query){
                ->when(false, function($query){
                    $query->where('username','=','happy');
                })
                ->get();
                return $member;
    }
 
}
