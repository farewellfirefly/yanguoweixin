<?php

namespace application\index\controller;

use think\View;

use think\Controller;

use application\index\model\User;

class Regist extends Controller{

 

  public function index(){

    $view = new View();

    return $view->fetch('index');

 

  }

 

  //用户注册

  public function regist(){

    //实例化User

    $user = new User;

    //接收前端表单提交的数据

    $user->user_name = input('post.user_name');

 

    $user->user_pwd = input('post.user_pwd');
    $user->user_pwd2 = input('post.user_pwd2');
 

    //进行规则验证

    $result = $this->validate(

      [

        'name' => $user->user_name,

        'password' => $user->user_pwd,

      ],

      [

        'name' => 'require|max:10',



        'password' => 'require',

      ]);
    if($param['user_pwd']!=$param['user_pwd2']){
    		
    		$this->error('输入密码前后不一致');
    	}

    if (true !== $result) {

      $this->error($result);

    }

 

    //写入数据库

    if ($user->save()) {

      return $this->success('注册成功');

    } else {

      return $this->success('注册失败');

    }

 

 

  }

}
