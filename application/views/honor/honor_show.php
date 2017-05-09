<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>명예의 전당</title>
    <!-- 합쳐지고 최소화된 최신 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <!-- 부가적인 테마 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    <style type="text/css">

        body{
            background-color: #FF9900;
        }

        .layout{
            position: relative;
            width:1080px;
            height:100%;
            margin: 0 auto;
            margin-top: 80px;
            text-align: center;
            background-color: white;
            border-radius: 80%;
        }

        .layout h2{
            position: relative;
            top: 0;

            /*padding: 50px;*/
        }

        h2{
            font-size: 70px;
            color: #FF9900;
        }

        .btn-warning{
            width: 120px;
            height: 50px;
            margin-top: 50px;
            margin-bottom: 50px;
        }

        button{
            border: none;
            background-color: white;
            display: inline-block;
            width: 250px;
            height: 50px;
            color: #2f2f2f;
            border-radius: 5px;
            text-align: center;
            padding-left: 80px;
        }

        .line{
            height:100px;
        }

    </style>
</head>
<body>

<div class="layout">
    <img src="/kinggod/resource/member/logo2.png" alt="logo">
<!--    <h2>명예의 전당 TOP 3</h2>-->
    <h2>명예의 전당</h2>
    <div>

    </div>
<!--        <?php /*echo $lt->user_message; */?>
        --><?php /*echo $lt->reg_date; */?>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModal">
        순위
    </button><br>
    <a href="/kinggod/member/main" style="text-decoration: none">메인으로 돌아가기</a><br><br><br>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">랭킹 순위</h4>
                </div>
                <div class="modal-body">
                    <br><br><br><br>
                    <?php
                    $i=0;
                    foreach ($list as $lt) {
                        $i+=1;
                        ?>
                        <div class="line">
                            <span style="font-size:20px; color: red"><?php echo $i ?>위</span>
                            <span style="font-size: 20px; color: #1f1d1d"><?php echo $lt->user_name; ?></span>
                            <br>
                            <span style="font-size: 20px; color: #1f1d1d"><?php echo $lt->user_message; ?></span>
                        </div>
                        <?php
                    }
                    ?>
                    <br><br><br><br>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">닫기</button>
                </div>
            </div>
        </div>
    </div>

</div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- 합쳐지고 최소화된 최신 자바스크립트 -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</html>