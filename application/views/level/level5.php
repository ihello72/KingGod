<style>

    button{
        margin-top: 200px;
        border: none;
        background-color: #eee;
        display: inline-block;
        width: 800px;
        height: 50px;
        font-size: 20px;
        color: #339966;
        border-radius: 5px;
        margin-bottom: 100px;
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


    <div class="box">
        <p>수업이 끝나 복도를 지나가던 도중, 조민욱(이)가 아인슈타인과 지식대결을 하는 모습을 목격했습니다!</p>
        <p>그러나 갑자기 아인슈타인이 갑자기 쓰러지는데…!</p>
        <p>“윽 내가 지식 배틀에서 지다니… 저 민욱이는 얼굴도 세상에서 제일 잘생겼고 머리도 세상에서 가장 좋구나..”</p>
        <p>민욱-“다음 도전자 받는다”</p>
        <p>플레이어-“내가 도전하겠소”</p>
        <p>민욱-“좋다 시작하지”</p>
        <p>[작가 : 조민욱]</p>
    </div>


    <!-- answer : "dgsw”-->

    <div class="input">
        <a href="/kinggod/level/level5_1"><button type="button">시작한다</button></a>
        <a href="/kinggod/level/level4"><button type="button">도망친다</button></a>
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