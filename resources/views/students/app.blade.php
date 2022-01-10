<html>
<head>
    <title>
        @yield('title')
    </title>
</head>
<div style="position: absolute; width: 100% ; height: 21.8%;top: 0%;left: 0%;background:rgba(205,201,201,0.8);background-size: contain;">
    <h1  style="position: absolute;font-size: 3em">@yield('head')</h1>
</div>
<body style="background: rgba(175,238,238,0.5);background-size: contain">
<div style="position: absolute;top: 14%;width: 15%;height: 7%">
    <table  style="width: 100%;height: 100%">
        <tr style="height: 100%;width: 100%">
            <td style="width: 50%;height: 100%">
                <form method="get" action="/classes" style="height: 100%;padding-top: 12%">
                    <input class="but" type="submit" value="所有班級資料" style="height: 90%;width: 100%">
                </form>
            </td>
            <td style="width: 50%;height: 100%">
                <form method="get" action="/students" style="height: 100%;padding-top: 12%">
                    <input type="submit" value="學生資料"style="height: 90%;width: 100% ">
                </form>

            </td>
        </tr>
    </table>
</div>

<div style="position: absolute;top: 21%;width: 100%;left: 0%"><hr></div>

<div style="position: absolute;width: 15%;height: 5%;top: 23%">
    <form method="get" action="/students/create" style="width: 100%;height: 100%">
        <input type="submit" value="新增學生資料" style="width: 100%;height: 100%">
    </form>
</div>
<div style="position:absolute;width: 100%;height: 60% ;top: 29%">
@section('body')
@show

</body>
</html>
