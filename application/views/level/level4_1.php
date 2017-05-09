<style>

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
        <p>“어, 애플 펜, 어딨는지 알아?”</p>
        <p> (문제를 풀고 얻은 코드를 입력하세요.) </p>
    </div>


    <!-- answer : "dgsw”-->

    <form method="POST" action="/kinggod/level/level4_1">
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