<html>
<head>
    <title>
        @yield('title')
    </title>
    <h1  style="position: absolute;left: 50% ;top:0%;transform: translate(-50%,-50%)">@yield('head')</h1>
</head>
<body>
<div style="position: absolute;left: 50%;top: 10% ;transform: translate(-50%,-0%)">
    <table>
        <tr>
            <td>
                <form method="get" action="/classes">
                    <input type="submit" value="所有班級資料">
                </form>
            </td>
            <td>
                <form method="get" action="/students">
                    <input type="submit" value="學生資料">
                </form>

            </td>
        </tr>
    </table>
</div>

<div style="position: absolute;top: 13%;width: 100%"><hr></div>

<div style="position: absolute;left: 50%;top: 16%">
    <form method="get" action="/classes/create" style="transform: translate(-50%,-50%);width: 100%">
        <input type="submit" value="新增班級資料" style="width: 350px">
    </form>
</div>
@section('body')

@show


<img src="../../../vendor/okok01.jpg">
</body>
</html>
