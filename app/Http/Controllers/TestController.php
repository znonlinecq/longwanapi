<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Test;
use App\Http\Controllers\ShopsController;

Class workers
{
    public function getName()
    {
        return 'Frank';
    }
}

class TestController extends Controller
{
    public function getUserInfo()
    {
        $userinfo = Test::orderBy('id', 'asc')->get();
        
        $data = array('code'=>0, 'msg'=>'success', 'data'=>$userinfo);
        $data = json_encode($data);
        return $data;
    }

    public function webservice(){
        $test = new Test();
        $soap = new \SOAPServer(NULL, array('localhost'=>'http://localhost/longwanapi/public/webservice', 'uri'=>'webservice'));
        $soap->setClass('Request');
        $soap->handle();
    }

    public function soapClient(){
        $soap = new \SOAPClient(null,array('location'=>"http://localhost/longwanapi/public/webservice",'uri'=>'webservice'));
        $result = $soap->getName();
        echo $result;
    }
}
