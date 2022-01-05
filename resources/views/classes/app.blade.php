<html>
<head>
    <title>
        @yield('title')
    </title>
    <h1  style="position: absolute;left: 50% ;top:0%;transform: translate(-50%,-50%)">@yield('head')</h1>
</head>
<body>
<div style="position: absolute;left: 50%;top: 10% ;transform: translate(-50%,-0%)">
    <form action="classes/create">
        <input type="submit" value="新增資料"/>
    </form>
@section('body')
@show

</div>
<img src="../../../vendor/okok01.jpg">
</body>
</html>
