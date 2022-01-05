<html>
<title>查詢結果</title>
<head>
    <h2 style="position: absolute; left: 50%;transform:translate(-50%,-50%)">查詢結果</h2>
</head>
@foreach($alldata as $class)
    <table border="1">
        <tr>
            <td>{{$class->id}}</td>
            <td>{{$class->department}}</td>
            <td>{{$class->classname}}</td>
            <td>{{$class->grede}}</td>
            <td><a href="classes/{{$class->id}}">詳細資料</a></td>
            <td><a href="classes/{{$class->id}}/edit">修改</a></td>
            <td>
                <form method="post" action="classes/{{$class->id}}">
                    @csrf
                    @method("delete")
                    <input type="submit" value="刪除"/>
                </form>
            </td>
        </tr>
    </table>
@endforeach
</html>
