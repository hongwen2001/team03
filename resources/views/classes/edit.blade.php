@extends('classes.app')
@section('head','請填寫資料')
@section('title','建立學生資料')
@section('body')
<form method="post" action="/classes/{{$class->id}}">
    @csrf
    @method('put')
    <table border="1">
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
            <td><input type="text" name="grede" value="{{$class->grede}}"></td>
        </tr>
        <tr>
            <td><b>教室</b></td>
            <td><input type="text" name="classroom" value="{{$class->classroom}}"></td>
        </tr>
        <tr>
            <td><b>班導</b></td>
            <td><input type="text" name="teacher" value="{{$class->teacher}}"></td>
        </tr>

    </table>
    <input type="submit" value="確定"><input type="reset" value="重新整理">
</form>
@endsection
