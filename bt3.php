<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
if (isset($_POST['submit'])) {
    $tenchuho = $_POST['tenchuho'];
    $chisocu = $_POST['chisocu'];
    $chisomoi = $_POST['chisomoi'];
    if (isset($_POST['dongia']) && $_POST['dongia'] != "") {
        $dongia = $_POST['dongia'];
    } else {
        $dongia = 20000;
    }

    if (is_numeric($chisomoi) and is_numeric($chisocu)) {
        if ($chisomoi > 0 and $chisocu > 0) {
            if ($chisomoi > $chisocu) {

                $thanhtien = ($chisomoi - $chisocu) * $dongia;

            } else {
                $msg = "Chi so moi phai lon hon chi so cu";
            }
        } else {
            $msg = "Phai lon hon khong";
        }
    } else {
        $msg = "Phai la so";
    }
}

?>

<body>
    <form action="tinhtiendien.php" method="post">
        <table style="background: beige">
            <th style="background: greenyellow" colspan="3">Tinh tien dien</th>
            <tr>
                <td>
                    Ten chu ho:
                </td>
                <td>
                    <input type="text" name="tenchuho" id="" value="<?php if (isset($tenchuho))
                        echo "$tenchuho"; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Chi so chu:
                </td>
                <td>
                    <input type="number" name="chisocu" id="" value="<?php if (isset($chisocu))
                        echo "$chisocu"; ?>">
                </td>
                <td>
                    (Kw)
                </td>
            </tr>
            <tr>
                <td>
                    Chi so moi:
                </td>
                <td>
                    <input type="number" name="chisomoi" id="" value="<?php if (isset($chisomoi))
                        echo "$chisomoi"; ?>">
                </td>
                <td>
                    (Kw)
                </td>
            </tr>
            <tr>
                <td>
                    Don gia:
                </td>
                <td>
                    <input type="number" name="dongia" id="" value="<?php if (isset($dongia))
                        echo "$dongia"; ?>">
                </td>
                <td>
                    (ti Dong)
                </td>
            </tr>
            <tr>
                <td>
                    So tien can thanh toan:
                </td>
                <td>
                    <input style="background-color: pink;" type="number" name="thanhtien" id="" value="<?php if (isset($thanhtien))
                        echo "$thanhtien"; ?>" readonly>
                </td>
                <td>
                    (ti Dong)
                </td>
            </tr>
            <tr>
                <td colspan="3" style="text-align: center">
                    <input type="submit" name="submit" value="TINH">
                </td>
            </tr>
            <tr>
                <td colspan="2" style="color: red">
                    <?php if (isset($msg))
                        echo "$msg"; ?>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>