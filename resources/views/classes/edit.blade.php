@extends('classes.app')
@section('head','修改班級資料')
@section('title','修改班級資料')
@section('body')
<form method="post" action="/classes/{{$class->id}}">
    @csrf
    @method('put')
    <table border="1" bgcolor="white" style="top:0%;line-height: 150%">
        <tr>
            <td><b>編號</b></td>
            <td>{{$class->id}}</td>
        </tr>
        <tr>
            <td><b>系別</b></td>
            <td><input type="text" name="department" value="{{$class->department}}"></td>
        </tr>
        <tr>
            <td><b>班級名稱</b></td>
            <td><input type="text" name="classname" value="{{$class->classname}}"></td>
        </tr>
        <tr>
            <td><b>年級</b></td>
            <td>
                <label for="1">1</label><input id="1" type="radio" value="1" name="grade" @if($class->grade=='1') checked @endif>
                <label for="2" >2</label><input id="2" type="radio" value="2" name="grade" @if($class->grade=='2') checked @endif>
                <label for="3">3</label><input id="3" type="radio" value="3" name="grade" @if($class->grade=='3') checked @endif>
            </td>
        </tr>
        <tr>
            <td><b>教室</b></td>
            <td><input type="text" name="classroom" value="{{$class->classroom}}"></td>
        </tr>
        <tr>
            <td><b>班導</b></td>
            <td><input type="text" name="teacher" value="{{$class->teacher}}"></td>
        </tr>
        <tr>
            <td><input type="submit" value="確定"></td>
            <td><input type="reset" value="重新整理">
            </td>
        </tr>
    </table>

</form>
@endsection
