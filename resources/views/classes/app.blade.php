<html>
<head>
    <title>
        @yield('title')
    </title>
</head>
<div style="position: absolute; width: 100% ; height: 13%;top: 0%;left: 0%;background-image: url({{URL::asset('storage/k3WYJoLNmM.jpg')}});background-size: contain">
    <span  style="position: absolute;font-size: 3em;width: 100%">@include('head')<b><i>@yield('head')</i></b></span>
</div>
<body style="background: rgba(175,238,238,0.5);background-size: contain">
<div style="position: absolute;width: 100%;top: 13%;height: 13%;left: 0%;background-color: rgba(154 ,255 ,154,0.6)">
<div style="position: absolute ; top: 76%;width: 20%;height: 20%">
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
<div style=" width: 15%;height: 75%">
    <table style="position: relative ;width: 100%;height: 90%;top: 5%">
        <tr style="height: 100%;width: 100%">
            <td style="width: 50%;height: 100%">
                <form method="get" action="/classes" style="height: 100%;padding-top: 12%">
                    <input type="submit" value="所有班級資料" style="height: 100%;width: 100%">
                </form>
            </td>
            <td style="width: 50%;height: 100%">
                <form method="get" action="/students" style="height: 100%;padding-top: 12%">
                    <input type="submit" value="學生資料"style="height: 100%;width: 100% ">
                </form>

            </td>
        </tr>
    </table>
</div>
</div>
<div style="position: absolute;top: 25%;width: 100%;left: 0%"><hr></div>

<div style="position: absolute;width: 20%;height: 5%;top: 27%">
    <form method="get" action="/classes/create" style="width: 100%;height: 100%">
        <input type="submit" value="新增班級資料" style="width: 100%;height: 100%">
    </form>
</div>
<div style="position:absolute;width: 100%;height: 60% ;top: 33%">
@section('body')

@show
<div style="position: absolute;margin-top: 5%;width: 100%;left: 0%">
    @include('footer')
</div>
</div>
</body>
</html>
