<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>添加留言(管理员模式)</</h1>
    <form action="" method="post">
        {!!csrf_field()!!}
        <p>
            标题:<input type="text" name="title">
        </p>
        <p>
            内容:<textarea name="content"  cols="30" rows="10"></textarea>
        </p>

        <p>
            *用户:<input name="username"></input>
        </p>

        <input type="submit" value="提交">
    </form>
</body>
</html>
