<?php
    $angka1 = @$_POST['tangka1'];
    $angka2 = @$_POST['tangka2'];
    $hasil = @$_POST['hasil'];

    if(isset($_POST['btambah']))
    {
        $hasil = $angka1 + $angka2;
    }
    if(isset($_POST['bkurang']))
    {
        $hasil = $angka1 - $angka2;
    }
    if(isset($_POST['bkali']))
    {
        $hasil = $angka1 * $angka2;
    }
    if(isset($_POST['bbagi']))
    {
        $hasil = $angka1 / $angka2;
    }
    if(isset($_POST['bmod']))
    {
        $hasil = $angka1 % $angka2;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
</head>
<body>

    <form method="post">
        <table align="center" border="1">
            <tr>
                <td colspan="3">
                  Ini Adalah Kalkulator
                </td>
            </tr>
            <tr>
                <td> <hr> </td>
            </tr>
            <tr>
                <td>Angka Pertama</td>
                <td>:</td>
                <td>
                    <input type="text" name="tangka1" value="<?=$angka1?>">
                </td>
            </tr>

            <tr>
                <td>Angka Kedua</td>
                <td>:</td>
                <td>
                    <input type="text" name="tangka2" value="<?=$angka2?>">
                </td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" name="btambah" value="+">
                    <input type="submit" name="bkurang" value="-">
                    <input type="submit" name="bkali" value="*">
                    <input type="submit" name="bbagi" value="/">
                    <input type="submit" name="bmod" value="%">
                </td>
            </tr>

            <tr>
                <td>Hasil Kalkulator</td>
                <td>:</td>
                <td>
                    <input type="text" name="thasil" value="<?=$hasil?>">
                </td>
            </tr>

            <tr>
                <td> <hr> </td>
            </tr>

        </table>    
    </form>

</body>
</html>