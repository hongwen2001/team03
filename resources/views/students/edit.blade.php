@extends('students.app')
@section('head','更改學生資料')
@section('title','更改學生資料')
@section('body')
<form method="post" action="/students/{{$student->id}}">
    @csrf
    @method('put')
<table border="1" style="position: absolute;left: 50% ;top:20%;transform: translate(-50%,-0%)">
    <tr>
        <td><b>編號</b></td>
        <td>{{$student->id}}</td>
    </tr>
    <tr>
        <td><b>學號</b></td>
        <td><input type="text" name="student_id" value="{{$student->student_id}}"></td>
    </tr>
    <tr>
        <td><b>座號</b></td>
        <td><input type="number" name="seat_number" value="{{$student->seat_number}}"></td>
    </tr>
    <tr>
        <td><b>姓名</b></td>
        <td><input type="text" name="name" value="{{$student->name}}"></td>
    </tr>
    <tr>
        <td><b>性別</b></td>
        <td><select name="gender">
                <option>F</option>
                <option>M</option>
            </select></td>
    </tr>
    <tr>
        <td><b>班級</b></td>
        <td><input type="text" name="cid" value="{{$student->cid}}"></td>
    </tr>
    <tr>
        <td><b>畢業年分</b></td>
        <td><input type="date" name="graduation_date" value="{{$student->graduation_date}}"></td>
    </tr>
    <tr>
        <td><b>入學年分</b></td>
        <td><input type="date" name="start_date" value="{{$student->start_date}}"></td>
    </tr>
    <tr>
        <td><b>座位</b></td>
        <td><input type="text" name="seat" value="{{$student->seat}}"></td>
    </tr>

    <tr>
        <td><b>出生地</b></td>
        <td><input type="text" name="country" value="{{$student->country}}"></td>
    </tr>
    <tr>
        <td>
            <input type="submit" value="確定">
        </td>
        <td>
            <input type="reset" value="重新整理">
        </td>

    </tr>
</table>
</form>

@endsection
