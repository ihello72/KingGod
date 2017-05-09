<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>문제등록</title>
    <style type="text/css">

    </style>
</head>
<body>
문제등록
<form method="POST" action="/kinggod/admin/question_insert">
    제목
    <input type="text" name="subject"><br>
    문제
    <textarea name="contents" cols="100" rows="30">
	</textarea><br>
    답<input type="text" name="correct">

    <input type="submit" value="문제 등록">
</form>

</body>
</html>