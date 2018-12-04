<?php
namespace app\index\controller;
 
class Index
{
    public function index()
    {
    	echo "您好： " . cookie('user_name') . ', <a href="' . url('login/loginout') . '">退出</a>';
    }   
    public function registsuccess(){
         echo "您好： " . cookie('user_name') . ',"注册成功！" <a href="' . url('login/loginout') . '">退出</a>';
    }
}
