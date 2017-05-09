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

    .input{
        margin-top: 30px;
        margin-bottom: 30px;
    }

</style>
<div class="layout">

    <h1> 윽!! 이럴수가! </h1><br>

    <div class="box">

        <p>민욱-“호오 나를 지식배틀로 이기다니.. 그렇다면 네 녀석은 내 아이큐 1008을 넘어선것인가…</p>
        <p>분하다..”</p>
        <p>[작가 : 조민욱]</p>
        <p>[Mac Book(1008)을 얻었습니다.]</p>

    </div>


    <!-- answer : "dgsw”-->

    <div class="input">
        <a href="/kinggod/level/level6"><button type="button">이동</button></a>
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