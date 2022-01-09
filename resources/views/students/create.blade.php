@extends('students.app')
@section('head','建立學生資料')
@section('title','建立學生資料')
@section('body')
<form method="post" action="/students">
    @csrf
    @method("post")
    <table border="1" style="position: absolute;left: 50% ;top:20%;transform: translate(-50%,-0%)">
        <tr>
            <td><b>學號</b></td>
            <td><input type="text" name="student_id"></td>
        </tr>
        <tr>
            <td><b>座號</b></td>
            <td><input type="number" name="seat_number"></td>
        </tr>
        <tr>
            <td><b>姓名</b></td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td><b>性別</b></td>
            <td><input type="text" name="gender"></td>
        </tr>
        <tr>
            <td><b>班級</b></td>
            <td><select>
                    @foreach($classes as $class)
                    <option>{{$class->department.$class->grede.$class->classname}}</option>

                    @endforeach
                </select></td>
        </tr>
        <tr>
            <td><b>畢業年分</b></td>
            <td><input type="text" name="graduation_date"></td>
        </tr>
        <tr>
            <td><b>入學年分</b></td>
            <td><input type="text" name="start_date"></td>
        </tr>
        <tr>
            <td><b>座位</b></td>
            <td><input type="text" name="seat"></td>
        </tr>

        <tr>
            <td><b>出生地</b></td>
            <td><input type="text" name="country"></td>
        </tr>

    </table>
    <input type="submit" value="確定"><input type="reset" value="重新整理">

</form>
@endsection
