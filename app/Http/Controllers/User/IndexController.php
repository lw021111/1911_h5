<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\UsersModel;
class IndexController extends Controller
{
    public function reg(){
    	return view('user/reg');
    }

    public function regdo(){
    	$data=request()->input();
        $info=UsersModel::create($data);
        if($info){
            return redirect("user/login")->with('msg',"注册成功");
        }
    	
    }

    public function login(){
    	return view('user/login');
    }

    public function logindo(){
        $data=request()->input();

        $info=UsersModel::where('username',$data['username'])->first();
        if(!$info){
            echo "该用户不存在";die;
        }else{
            if($data['pwd']==$info['pwd']){
                return redirect("index/index")->with('msg',"登陆成功");
            }else{
                echo "用户名或密码错误";
            }
        
        }
        
    }


}
