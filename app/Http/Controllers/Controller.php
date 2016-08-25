<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;
    
    public function __construct(Request $request)
    {
//        $uri = $request->path();
 //       print_r($uri);

     //   $all = $request->all();
   //     print_r($all);
    }

    public function dataHandle($data=array(), $message=null)
    {
        if(count($data))
        {
            $code = 200;
            $msg = 'success';
        }
        else
        {
            $code = 400;
            if($message)
            {
                $msg = $message;
            }
            else
            {
                $msg = 'failed';
            }
        }

        $result = array(
            'code' => $code,
            'message' => $msg,
            'data' => $data,
        );

        $json = json_encode($result);
        return $json;
    }
}
