<html>
<?php
    $number=0;
?>

@foreach($students as $student)
    <?php
    $i=($number%4)*25;
    $ii=(int)($number/5);
    ?>

<table style="position: absolute;left: {{$i}}%;top: {{$ii}}*50px" border="1">
    <tr>
        <td><b>編號</b></td>
        <td>{{$student->id}}</td>
    </tr>
    <tr>
        <td><b>學號</b></td>
        <td>{{$student->student_id}}</td>
    </tr>
    <tr>
        <td><b>座號</b></td>
        <td>{{$student->seat_number}}</td>
    </tr>
    <tr>
        <td><b>姓名</b></td>
        <td>{{$student->name}}</td>
    </tr>
    <tr>
        <td><b>性別</b></td>
        <td>{{$student->gender}}</td>
    </tr>
    <tr>
        <td><b>班級</b></td>
        <td>{{$student->cid}}</td>
    </tr>
    <tr>
        <td><b>畢業年分</b></td>
        <td>{{$student->graduation_date}}</td>
    </tr>
    <tr>
        <td><b>入學年分</b></td>
        <td>{{$student->start_date}}</td>
    </tr>
    <tr>
        <td><b>座位</b></td>
        <td>{{$student->seat}}</td>
    </tr>

    <tr>
        <td><b>出生地</b></td>
        <td>{{$student->country}}</td>
    </tr>

</table>
    <?php $number++?>
@endforeach
</html>
