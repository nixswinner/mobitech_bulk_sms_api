<?php 

namespace mobitech\MobitechSmsApi;

class Index
{
    public function greet($greet = "Hello World")
    {
        return $greet;
    }
    public function sendSms($phone,$message){
    	return "success ";
    }
}
