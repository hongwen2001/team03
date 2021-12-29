<html>
<title>班級資料</title>
<body>{{$whatdata}}的資料</body>
<form action="classes/create">
    <input type="submit" value="新增資料"/>
</form>
<table border="1">
    <tr>
        <td><b>編號</b></td>
        <td><b>系別</b></td>
        <td><b>班級名稱</b></td>
        <td><b>年級</b></td>
        <td><b>操作1</b></td>
        <td><b>操作2</b></td>
        <td><b>操作3</b></td>

    </tr>
    @foreach($classes as $class)
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
    @endforeach
</table>
</html>
