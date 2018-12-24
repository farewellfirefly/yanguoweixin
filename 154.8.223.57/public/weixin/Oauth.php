<?php

if (isset($_GET['code'])){
    echo $_GET['code'];
}else{
    echo "NO CODE";
}

  /*  获取到CODE
********************************************************************************************************
    通过以下URL,跳转到回调地址,并获取到CODE
    https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx4ffe828b9abc68f5&redirect_uri=http://154.8.223.57/weixin/Oauth.php&response_type=code&scope=snsapi_userinfo&state=123#wechat_redirect


    通过CODE获取到access_token和OPENID
     https://api.weixin.qq.com/sns/oauth2/access_token?appid=wx4ffe828b9abc68f5&secret=91226e2591487b7accd05a1ee3cfd119&code=081hnch60w32GD1EnPf60IsSg60hnchf&grant_type=authorization_code


    通过OPENID和access_token获取用户信息
    https://api.weixin.qq.com/sns/userinfo?access_token=16_crOWlCxaG9h3J7tnbcxzuOQfQORzEWgH8X3GFSgrL0M57aGJAY20ZCOax6zpGlwrWtUn9EWNUQNaJCKOdnYkoNI4au5Wou_LuPn7RusKU1o&openid=oumSC0Y4_OrBlwCKpCOY0u8S_kbI

********************************************************************************************************
*/

  