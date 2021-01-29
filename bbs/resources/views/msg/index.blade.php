<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>

        #out{
            float:right;
        }

        h1{
            color:rgba(100, 149, 237, .7);
            margin-left: 700px;
        }

        #content{
            font-size: 2em;
        }

        #add{
            float:right;
        }

    </style>
</head>
<body>

    <h1>laravel 留言</h1>

    <table>
        <div >
            <tr id="content">
                <td>标题&nbsp</td>
                <td>内容&nbsp</td>
                <td>用户名&nbsp</td>
                <td>操作&nbsp</td>
            </tr>
            @foreach($msg  as $m)
            <tr>
                <td>{{$m->title}}   &nbsp</td>
                <td>{{$m->content}}   &nbsp</td>
                <td>{{$m->username}} &nbsp</td>
                <td>
                    <a href="/msg/edit/{{$m->id}}">编辑&nbsp</a>
                </td>
            </tr>
            @endforeach
        </div>
    </table>

    <div id="add">
        <a href="/msg/add">添加留言</a>
    </div>
    <br>
    <div id="out">
        <a href="/relog">登出</a>
    </div>
</body>
</html>
