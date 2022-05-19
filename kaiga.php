<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>絵画と気分のアンケート</title>
</head>
<body>
    <p>今日の気分をアンケート</p>
    <form action="post_kaiga.php" method="post" id ="form-table">

        <!-- アンケートのテーブル -->
        <table>
            <tr>
                <tr>
                    <td>名前</td>
                    <td><input type="text" name="name" id="name" size="30"></td>
                </tr>
                <td>年齢</td>
                <td>
                    <select name="age" id="age">
                        <option value="10">10代</option>
                        <option value="20">20代</option>
                        <option value="30">30代</option>
                        <option value="40">40代</option>
                        <option value="50">50代</option>
                        <option value="60">60代</option>
                        <option value="70">70代</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>性別</td>
                <td>
                    <label for="male">
                        <input type="radio" name="gender" value="男性" id="male">男性
                    </label>
                    <label for="female">
                        <input type="radio" name="gender" value="女性" id="female">女性
                    </label>
                </td>
            </tr>
            <tr>
                <td>今日の気分は？</td>
                <td>
                    <select name="kibun" id="kibun">
                        <option value="最高">最高</option>
                        <option value="良い">良い</option>
                        <option value="普通">普通</option>
                        <option value="微妙">微妙</option>
                        <option value="悪い">悪い</option>
                        <option value="最悪">最悪</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>頭を占めている感情は？</td>
                <td>
                    <select name="kanzyo" id="kanzyo">
                        <option value="イライラ">イライラ</option>
                        <option value="悲しさ">悲しさ</option>
                        <option value="喜び">喜び</option>
                        <option value="ワクワク">ワクワク</option>
                        <option value="無気力">無気力</option>
                        <option value="興奮">興奮</option>
                    </select>
                </td>
            </tr>
        </table>
        <input type="submit" value="送信">
    </form>
</body>
</html>