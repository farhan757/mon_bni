<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Exception;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function index()
    {
        $data = DB::table('users')
                ->join('tb_group','users.group_id','=','tb_group.group_id')
                ->select('users.*','tb_group.nama_group')
                ->orderBy('users.id','desc')->get();
        return view('master.user.index')->with('data',$data);
    }

    public function add(Request $r)
    {
        $username = $r->username;
        $email = $r->email;
        $group_id = $r->group_id;
        $password = Hash::make($r->password);
        $message = "";
        DB::beginTransaction();
        try{
            DB::table('users')->insert([
                'name' => $username,
                'email' => $email,
                'group_id' => $group_id,
                'password' => $password
            ]);            
            DB::commit();
            $message = "Sucess";
            return response()->json($message,200);
        }catch(Exception $e){
            DB::rollBack();
            $message = "Error,".$e;
            return response()->json($message,400);
        }        
    }

    public function save(Request $r)
    {
        $id = $r->user_id;        
        $email = $r->email;
        $group_id = $r->group_id;
        $password = Hash::make($r->password);
        $message = "";
        DB::beginTransaction();
        try{
            if($r->password != null || $r->password == ""){
                DB::table('users')->where('id',$id)->update([                
                    'email' => $email,
                    'group_id' => $group_id,
                    'password' => $password
                ]); 
            }else{
                DB::table('users')->where('id',$id)->update([                
                    'email' => $email,
                    'group_id' => $group_id,                    
                ]); 
            }
           
            DB::commit();
            $message = "Sucess";
            return response()->json($message,200);
        }catch(Exception $e){
            DB::rollBack();
            $message = "Error,".$e;
            return response()->json($message,400);
        } 
    }
}
