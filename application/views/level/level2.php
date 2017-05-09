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

    <img src="/kinggod/resource/member/level2.jpg" alt="cubi">

    <div class="box">
        <p>자습시간, 빼앗긴 휴대폰을 찾으러
            마이스터 교육실로 가려합니다.
            <br>그러나 가려던 찰나, (113+126)가 왔습니다!</p>
        <p style="color: brown; font-size: 30px;">이 친구의 이름은 무엇인가요?</p>
    </div>


    <!-- answer : "dgsw”-->

    <form method="POST" action="/kinggod/level/level2">
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