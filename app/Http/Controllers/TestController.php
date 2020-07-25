<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
class TestController extends Controller
{
    public function test(){
        echo "111111120";
    }
    //对称
    public function aes1(){
        $method='AES-256-CBC';
        $key='1911api';
        $iv='aaaabbbbccccdddd';
        $option=OPENSSL_RAW_DATA;
    	$url='http://api.1911.com/test/dec';  //api接口地址
        $data='hello world';    //待加密数据
        $enc_data=openssl_encrypt($data, $method, $key,$option,$iv);

        //echo "密文: ".$enc_data;echo "</br>";
        $b64_str=base64_encode($enc_data);
        //echo "base64: ".$b64_str;echo "</br>";
        $client=new Client();
        $response=$client->request('POST',$url,[
            'form_params'=>[
                'data'=>$b64_str
            ]
            
        ]);
        echo $response->getBody();

    }
    //非对称
    public function aesdec(){
        $priv_key=openssl_get_privatekey(file_get_contents(storage_path('keys/priv.key')));
        openssl_private_decrypt($enc_data,$dec_data,$priv_key);
        echo '解密: '.$dec_data;
    }

    //签名测试
    public function sign1(){
        $data="hello world";
        $key="1911api";
        $sign_str=sha1($data.$key);
        $url="http://api.1911.com/test/sign1?data=".$data."&sign=".$sign_str;
        $response=file_get_contents($url);
        echo $response;
    }





}

