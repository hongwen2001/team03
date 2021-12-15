<html>
<title>測試index的頁面</title>
<head>{{$whatdata}}的資料</head>
<table border="1">
    <tr>
        <td><b>編號</b></td>
        <td><b>學號</b></td>
        <td><b>座號</b></td>
        <td><b>姓名</b></td>
        <td><b>操作1</b></td>
    </tr>
    @foreach($students as $student)
        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->student_id}}</td>
            <td>{{$student->seat_number}}</td>
            <td>{{$student->name}}</td>
            <td><a href="students/{{$student->id}}">詳細資料</a></td>

        </tr>
    @endforeach
</table>
</html>
