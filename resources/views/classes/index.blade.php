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
    @foreach($students as $student)
        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->department}}</td>
            <td>{{$student->classname}}</td>
            <td>{{$student->grade}}</td>
            <td><a href={{$student->id}}>詳細資料</a></td>
            <td><a href=>修改</a></td>
        </tr>
    @endforeach
</table>
</html>
