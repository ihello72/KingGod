<style type="text/css">
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

    .layout{
        width: 1080px;
        margin: 0 auto;
        padding-top: 150px;
        margin-bottom: 100px;
        text-align: center;
    }

    .layout .box{
        width: 800px;
        height: 500px;
        margin: 0 auto;
        margin-bottom: 100px;
        background-color: #eee;
    }

    .layout .box img{
        padding: 30px;
    }

    #stack{
        margin-top: 30px;
        margin-bottom: 50px;
        display: block;
        width: 100%;
        height: 5px;
        background-color: #eee;
    }


    #answer{
        text-align: left;
        width: 100%;
    }

    .input [type="text"]{
        text-align: center;
        display: inline-block;
        /*width: 40rem;*/
        width: 70%;
        height: 30px;
        border: none;
        padding: 10px;
        background-color: #eee;
        font-size: 20px;
    }

    .input [type="submit"]{
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

    button{
        text-align: center;
        border: none;
        background-color: #eee;
        display: inline-block;
        width: 100%;
        height: 50px;
        font-size: 20px;
        color: #339966;
        border-radius: 5px;
        margin-bottom: 10px;
        padding-left: 80px;
    }



</style>
</head>
<body>
<nav>
    <p>영후니는 귀여워여</p>
</nav>
<div class="layout">
    <div class="box">
        <img src="/kinggod/resource/cusi.jpg"><br>
        <p>문제를 풀고보니 굉장히 쉬운문제였군요!<br>
            문제가 어려운게 아니라 상구가 단순한 것 같습니다.<br>
            “정말 똑똑한놈이구나! 복도에서 주운걸 줄게!”<br>
            도와준 사람한테 길에서 주운걸 주다니 인성 수준이 정말.. 안타깝네요.<br>
            [APPLE PEN(1036)을 획득했다!]
        </p>
    </div>
    <span id="stack"></span>
    <div class="input">
        <a href="/kinggod/level/level4"><button type="button"> 이동 </button></a>
    </div>
    <?php
    if(count($list)==0){


        ?>
        <?php
    }else {
        ?>

        <div class="list">
            <table>
                <tr>
                    <th>닉네임</th>
                    <th>메시지</th>
                    <th>작성날짜</th>
                </tr>
                <?php
                foreach ($list as $lt) {
                    ?>
                    <tr>

                        <td><?php echo $lt->username; ?></td>

                        <td><?php echo $lt->contents; ?></td>

                        <td><?php echo $lt->reg_date ?></td>

                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>

        <?php
    }
    ?>
</div>
</body>
</html>