<div class="layout">

    <h1> 대구 소프트웨어 고등학교에 오신 것을 환영합니다! </h1>

    <img src="/kinggod/resource/cubi.png" alt="cubi">

    <p>대구 소프트웨어 고등학교는 자기주도적 학습을 좋아합니다! 답을 알아서 찾아 적으세요</p>

    <p style="color: #339966;">Help : 답의 경우 영어의 경우 영어 소문자로,
        숫자의 경우 숫자만 쓰시면 됩니다.
        또한, 문제 밑부분을 드래그하시면 힌트가 보이지만,
        힌트는 급격한 난이도 저하를 유발하므로 되도록 보지 않고 플레이해주세요!
    </p>


    <p style="color: white">HINT : PAGE SOURCE</p>

    <!-- answer : "dgsw”-->

    <form method="POST" action="/kinggod/level/level1">
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