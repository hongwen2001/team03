<html>
<title>測試index的頁面</title>
<body>{{$whatdata}}的資料</body>
<table>
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
            <td><a href={{$class->id}}>詳細資料</a></td>
            <td><a href=>修改</a></td>
        </tr>
    @endforeach
</table>
</html>
