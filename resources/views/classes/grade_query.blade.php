@extends('classes.app')
@section('head','年級所有班級')
@section('title','建立班級資料')
@section('body')
    <div>
        <table border="3" bgcolor="white" style="border: 2px #718096 solid;width: 31.3%;line-height: 200%">
            <tr>
                <td style="width: 20%"><b>編號</b></td>
                <td><b>系別</b></td>
                <td><b>班級名稱</b></td>
                <td><b>年級</b></td>
                <td><b>教室</b></td>
                <td><b>班導</b></td>
            </tr>
        @foreach($classes as $class)

            <tr>
                <td>{{$class->id}}</td>
                <td>{{$class->department}}</td>
                <td>{{$class->classname}}</td>
                <td>{{$class->grade}}</td>
                <td>{{$class->classroom}}</td>
                <td>{{$class->teacher}}</td>
            </tr>
        @endforeach
        </table>

    </div>
@endsection




