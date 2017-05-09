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
    <style>

        *{ margin:0; padding: 0; }

        nav{
            background-color: #FFCC00;
            width: 100%;
            height: 50px;
            padding: 20px;
            text-align: center;
            color: white;
            font-size: 30px;
            position: fixed;
        }

        .layout{ text-align: center; padding-top: 150px;}

        [type='text']{
            padding: 10px;
            color: white;
            text-align: center;
            display: inline-block;
            width: 50rem;
            margin: 0 auto;
            margin-bottom: 2.5rem;
            font-size: 1.6em;
            background-color: #ffd156;
            border: none;
            border-radius: 5px;
        }

        [type="submit"]{
            border: none;
            background-color: #FFCC00;
            display: inline-block;
            width: 10rem;
            height: 50px;
            font-size: 20px;
            color: white;
            border-radius: 5px;
        }

        .list{
            width: 100%;
            margin: 0 auto;
            margin-top: 50px;
            margin-bottom: 100px;
        }

        .list table{
            margin: 0 auto;
            border-collapse: collapse;
            border-spacing: 0;
        }

        td{
            text-align: center;
            width: 30em;
            padding: 1em;
        }

        th{
            text-align: center;
            padding: 1em;
            background-color: #FFCC00;
            color: white;
        }

        tr{
            height: 1em;
        }

        table tr:nth-child(even){
            background-color: #eee;
        }

        table tr:nth-child(odd){
            background-color: #fff;
        }

    </style>
</head>
<body>
    <nav>
        <p>잃어버린 휴대폰을 찾아서</p>
    </nav>