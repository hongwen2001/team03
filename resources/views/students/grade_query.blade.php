@extends('students.app')
@section('head',$grade.'年級所有學生')
@section('title',$grade.'建立班級資料')
@section('body')
    <div>
        <table border="1" bgcolor="white" >
            <tr>
                <td><b>編號</b></td>
                <td><b>學號</b></td>
                <td><b>座號</b></td>
                <td><b>姓名</b></td>
                <td><b>班級</b></td>
                <td><b>操作1</b></td>
                <td><b>操作2</b></td>
                <td><b>操作3</b></td>
            </tr>
            @foreach($students as $studentall)
                @foreach($studentall['students'] as $student)
                <tr>
                    <td>{{$student->id}}</td>
                    <td>{{$student->student_id}}</td>
                    <td>{{$student->seat_number}}</td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->class->department.$student->class->grade.$student->class->classname}}</td>
                    <td><a href="students/{{$student->id}}">詳細資料</a></td>
                    <td><a href="students/{{$student->id}}/edit">修改</a></td>

                    <td>
                        <form method="post" action="students/{{$student->id}}">
                            @csrf
                            @method("delete")
                            <input type="submit" value="刪除"/>
                        </form>
                    </td>

                </tr>
            @endforeach
            @endforeach
        </table>

    </div>
@endsection
