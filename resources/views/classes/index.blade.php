@extends('classes.app')
@section('head','所有班級資料')
@section('title','所有班級資料')
@section('body')

<table border="1" bgcolor="white">
    <tr>
        <td><b>編號</b></td>
        <td><b>系別</b></td>
        <td><b>班級名稱</b></td>
        <td><b>年級</b></td>
        <td><b>操作1</b></td>
        <td><b>操作2</b></td>
        <td><b>操作3</b></td>

    </tr>
    @foreach($classes as $class)
        <tr>
            <td>{{$class->id}}</td>
            <td>{{$class->department}}</td>
            <td>{{$class->classname}}</td>
            <td>{{$class->grade}}</td>
            <td><a href="classes/{{$class->id}}">詳細資料</a></td>
            <td><a href="classes/{{$class->id}}/edit">修改</a></td>
            <td>
                <form method="post" action="classes/{{$class->id}}">
                    @csrf
                    @method("delete")
                    <input type="submit" value="刪除"/>
                </form>
            </td>

        </tr>
    @endforeach
</table>
@endsection
