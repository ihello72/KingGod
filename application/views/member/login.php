<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>jgy</title>
    <link rel="stylesheet" href="/kinggod/resource/member/style_login.css">
    <style>
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

            <h3><span style="font-size: 30px;"><a href="/kinggod/member/login">로그인</a></span> 혹은 <span style="font-size: 30px;"><a href="/kinggod/member/register">회원가입</a></span>을 하십시오</h3>
            <br>
            <form method="POST">
                <div class="form">
                    <h2 style="font-weight: lighter;">id / 아이디</h2>
                        <input type="text" name="userid">
                        <h3 style="font-weight: lighter;">pw / 패스워드</h3>
                        <input type="password" name="userpw">
                        <input type="submit" value="로그인">
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>