<html>
<form method="post" action="/classes">
    @csrf
    @method('post')
    <table border="1">
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
            <td><input type="text" name="grede"></td>
        </tr>
        <tr>
            <td><b>教室</b></td>
            <td><input type="text" name="classroom"></td>
        </tr>
        <tr>
            <td><b>班導</b></td>
            <td><input type="text" name="teacher"></td>
        </tr>

    </table>
    <input type="submit" value="確定"><input type="reset" value="重新整理">
</form>
</html>
