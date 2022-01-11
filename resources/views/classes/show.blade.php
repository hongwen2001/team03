@extends('classes.app')
@section('head','詳細班級資料')
@section('title','詳細班級資料')
@section('body')
    <div>
<table border="3" bgcolor="white" style="border: 2px #718096 solid;width: 31.3%;line-height: 200%">
    <tr>
        <td style="width: 20%"><b>編號</b></td>
        <td>{{$class->id}}</td>
    </tr>
    <tr>
        <td><b>系別</b></td>
        <td>{{$class->department}}</td>
    </tr>
    <tr>
        <td><b>班級名稱</b></td>
        <td>{{$class->classname}}</td>
    </tr>
    <tr>
        <td><b>年級</b></td>
        <td>{{$class->grade}}</td>
    </tr>
    <tr>
        <td><b>教室</b></td>
        <td>{{$class->classroom}}</td>
    </tr>
    <tr>
        <td><b>班導</b></td>
        <td>{{$class->teacher}}</td>
    </tr>
</table>
    </div>
<div style="width: 100%;height: 100%;padding-top: 1%">
    <table border="0">
        <tr>
<?php
    $i=0;
    $ii=0;
?>
@foreach($students['students'] as $student)

        @if(($i%$allstudent)==0)
            <td >
            <table border="1" bgcolor="white" style="border: 3px #2d3748 solid">
                <tr>
                    <td><b>編號</b></td>
                    <td><b>學號</b></td>
                    <td><b>座號</b></td>
                    <td><b>姓名</b></td>
                </tr>
                    @endif
                    <tr>
                        <td>{{$student->id}}</td>
                        <td>{{$student->student_id}}</td>
                        <td>{{$student->seat_number}}</td>
                        <td>{{$student->name}}</td>
                    </tr>
                <?php
                        $i++;
                ?>
                @if(($i%$allstudent)==0)
            </table>
            </td>
        @endif
@endforeach
        </tr>
    </table>
</div>
@endsection
