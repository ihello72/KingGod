<style>

    .layout{
        margin-bottom: 100px;
    }

    .layout .box{
        width: 1200px;
        height: 500px;
        margin: 0 auto;
        padding-top: 80px;
        text-align: center;
        /*background-color: #eee;*/
    }

    .layout .box p{
        text-align: center;
        font-size: 20px;
    }

</style>
<div class="layout">

    <div class="box">
        <img src="/kinggod/resource/member/level5_3.png" alt="level5_3" style="width: 800px; height: 400px;">
        <p style="color: white">HINT : Substitution</p>
    </div>

    <!-- answer : "dgsw”-->

    <form method="POST" action="/kinggod/level/level5_3">
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