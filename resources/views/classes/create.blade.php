@extends('classes.app')
@section('head','建立班級資料')
@section('title','建立班級資料')
@section('body')
<form method="post" action="/classes">
    @csrf
    @method('post')
    <table border="1" bgcolor="white" style=" line-height: 150%" >
        <tr>
            <td><b>系別</b></td>
            <td><input type="text" name="department"></td>
        </tr>
        <tr>
            <td><b>班級名稱</b></td>
            <td><input type="text" name="classname"></td>
        </tr>
        <tr>
            <td><b>年級</b></td>
            <td>
                <label for="1">1</label><input id="1" type="radio" value="1" name="grade" checked>
                <label for="2">2</label><input id="2" type="radio" value="2" name="grade">
                <label for="3">3</label><input id="3" type="radio" value="3" name="grade">
            </td>
        </tr>
        <tr>
            <td><b>教室</b></td>
            <td><input type="text" name="classroom"></td>
        </tr>
        <tr>
            <td><b>班導</b></td>
            <td><input type="text" name="teacher"></td>
        </tr>
        <tr>
            <td><input type="submit" value="確定"></td>
            <td><input type="reset" value="重新整理">
            </td>
        </tr>
    </table>


</form>
    @endsection

