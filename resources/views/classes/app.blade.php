<html>
<head>
    <title>
        @yield('title')
    </title>
</head>
<div style="position: absolute; width: 100% ; height: 21.8%;top: 0%;left: 0%;background:rgba(205,201,201,0.8);background-size: contain;">
    <h1  style="position: absolute;font-size: 3em;left: 2%">@yield('head')</h1>
</div>
<body style="background: rgba(175,238,238,0.5);background-size: contain">
<div style="position: absolute ; top: 18.5%;width: 20%">
    <form method="get" action="/classes/grade_query">
        <label style="background-color: rgba(255 ,228 ,196,0.9)">依年級查詢:</label>
        <select name="grade">
            <option value="1">1年級</option>
            <option value="2">2年級</option>
            <option value="3">3年級</option>
        </select>
        <input type="submit" value="確定">
    </form>
</div>
<div style="position: absolute;top: 10%;width: 20%;height: 8%">
    <table style="width: 100%;height: 100%">
        <tr style="height: 100%;width: 100%">
            <td style="width: 50%;height: 100%">
                <form method="get" action="/classes" style="height: 100%;padding-top: 12%">
                    <input type="submit" value="所有班級資料" style="height: 90%;width: 100%">
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

<div style="position: absolute;width: 20%;height: 5%;top: 23%">
    <form method="get" action="/classes/create" style="width: 100%;height: 100%">
        <input type="submit" value="新增班級資料" style="width: 100%;height: 100%">
    </form>
</div>
<div style="position:absolute;width: 100%;height: 60% ;top: 29%">
@section('body')

@show
</div>


</body>
</html>
