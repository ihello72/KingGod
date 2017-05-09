<style>

    button{
        border: none;
        background-color: #eee;
        display: inline-block;
        width: 800px;
        height: 50px;
        font-size: 20px;
        color: #339966;
        border-radius: 5px;
        margin-bottom: 10px;
        text-align: center;
        padding-left: 80px;
    }

    .layout .box{
        width: 800px;
        height: 150px;
        margin: 0 auto;
        padding-top: 80px;
        /*background-color: #eee;*/
    }

    .layout .box p{
        text-align: left;
        font-size: 20px;
    }

</style>
<div class="layout">

    <h1> START </h1><br>

    <img src="/kinggod/resource/member/level3.png" alt="cubi">

    <div class="box">
        <p>“어, 고마워. 이거 줄게.”</p>
        <p> [IPhone(2048)을 획득했습니다!] </p>
    </div>


    <!-- answer : "dgsw”-->

    <div class="input">
        <a href="/kinggod/level/level5"><button type="button">이동</button></a>
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