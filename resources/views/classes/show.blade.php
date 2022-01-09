@extends('classes.app')
@section('head','詳細班級資料')
@section('title','詳細班級資料')
@section('body')
    <div style="position: absolute;left: 50%;top: 20% ;transform: translate(-50%,-0%)">
<table border="1">
    <tr>
        <td><b>編號</b></td>
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
        <td>{{$class->grede}}</td>
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

<?php
    $i=0;
    $ii=0;
?>
@foreach($students['students'] as $student)

        @if(($i%19)==0)
            <table border="1" style="position: absolute;left: {{((100-ceil(count($students['students'])/19)*11)/2+$ii*16)}}%;top: 40%">
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
                        $ii=(int)($i/19);
                ?>
                @if(($i%19)==0)
            </table>
        @endif
@endforeach

@endsection
