<style type="text/css">
    *{ margin:0; padding: 0; }

    nav{
        background-color: #339966;
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
        padding-top: 50px;
        margin-bottom: 100px;
        text-align: left;
    }

    .layout .box{
        width: 800px;
        height: 200px;
        margin: 0 auto;
        padding-top: 80px;
        margin-bottom: 120px;
        /*background-color: #eee;*/
    }

    .layout .box p{
        font-size: 25px;
    }

    .layout .box img{
        padding: 30px;
    }

    #stack{
        margin-bottom: 50px;
        display: block;
        width: 100%;
        height: 5px;
        background-color: #eee;
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
        color: #2f2f2f;
        font-size: 20px;
    }

    button{
        border: none;
        background-color: #eee;
        display: inline-block;
        width: 100%;
        height: 50px;
        font-size: 20px;
        color: #339966;
        border-radius: 5px;
        /*margin-bottom: 10px;*/
        text-align: center;
        padding-left: 80px;
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
        background-color: #339966;
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

    .giho{
        float: right;
        font-size: 30px;
        padding-right: 30px;
    }

    .layout .box img{
        padding: 30px;
    }

</style>
<div class="layout">
    <div class="box">

        <img src="/kinggod/resource/member/level3.png" alt="level3">

        <p>“이렇게까지 풀면 휴대폰 줘야하는거겟냐?” </p>
        <p> [MY PHONE(9999)를 획득했습니다!] </p>
        <p> 축하합니다! 게임을 클리어하셨습니다! </p>


    </div>
    <span id="stack"></span>
    <div class="input">
        <form method="POST" action="/kinggod/honor/insertHonor">
            <input type="text" name="contents" placeholder="명예의 전당의 등록할 글을 입력해 주세요!">
            <input type="submit" value="명예의 전당 등록">
        </form>
<!--        <a href="/kinggod/honor"><button type="button">명예의 전당 등록</button></a>-->
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