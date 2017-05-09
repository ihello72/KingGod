<?php
if( @$this->session->userdata('logged_in') != TRUE)
{
    alert('로그인을 해주세요' ,'/kinggod/member/login');
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>jgy</title>
    <link rel="stylesheet" href="/kinggod/resource/member/main.css">
    <style type="text/css">
        .logout
        {
            text-decoration: none;
        }
        a{
            text-decoration: none;
        }

        #tex{
            display: inline-block;
            position: absolute;
            left: 43%;
            top: 70%;
            color: #ffcd36;
        }
    </style>
</head>
<body>
<div class="layout">
    <div class="box1">
        <img src="/kinggod/resource/member/logo2.png" id="logo">
        <a href="/kinggod/honor/lists"><p id="tex">명예의 전당</p></a>
    </div>
    <div class="box2">
        <div class="form_layout">

            <h1><?php echo $this->session->userdata('user_name');?> 님 환영합니다.</h1>
            <span class="logout"> <a href="/kinggod/member/logout">로그아웃</a> </span><br>
            <br>
            <div class="border">
                <a href="/kinggod/level/level1">
                    <button>게임 스타트</button>
                </a>
            </div>

        </div>
    </div>
</div>
</body>
</html>