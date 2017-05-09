<style type="text/css">
    *{ margin:0; padding: 0; }


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
        margin-bottom: 350px;
        /*background-color: #eee;*/
    }

    .layout .box p{
        font-size: 20px;
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

    button{
        border: none;
        background-color: #eee;
        display: inline-block;
        width: 100%;
        height: 50px;
        font-size: 20px;
        color: #339966;
        border-radius: 5px;
        margin-bottom: 10px;
        text-align: left;
        padding-left: 80px;
    }

    .list{
        width: 100%;
        margin: 0 auto;
        margin-top: 50px;
        margin-bottom: 100px;
    }

    .layout .box img{
        padding: 30px;
    }

</style>
<div class="layout">
    <div class="box">

        <img src="/kinggod/resource/member/level3_1.png" alt="level3" style="width: 700px; height: 300px;">

        <p>상황을 보아하니, 상구가 어려운 문제로 인해 고생중인 것 같습니다.<br>
            이 불쌍한 친구를 도와줍시다!
        </p>

        <p style="color: red;">종류 : 숫자</p>
        <p style="color: white">HINT : sodium chloride</p>

    </div>
    <span id="stack"></span>
    <form method="POST" action="/kinggod/level/level3_1">
        <input type="text" name="answer">
        <input type="submit" value="체크">
    </form>
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