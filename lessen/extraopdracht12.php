<?php

session_start();
if (empty($_SESSION['groente']) ){
    $_SESSION['groente'] = array();
    $_SESSION['fruit'] = array();
    $_SESSION['toetje'] = array();

}


if (isset($_POST['submit'])){

    array_push($_SESSION['groente'], $_POST['groente']);
    array_push($_SESSION['fruit'], $_POST['fruit']);
    array_push($_SESSION['toetje'], $_POST['toetje']);

    tableMaken();

}

function tableMaken() {
    $tabel = null;
    $tabel .= "<table>";
    $tabel .= "<tr>";
    $tabel .= "<td>groete</td>";
    $tabel .= "<td>fruit</td>";
    $tabel .= "<td>toetke</td>";
    $tabel .= "</td>";

    $teller = 0;
    foreach ($_SESSION['groente'] as $item) {
        $tabel .= "<tr>";
        $tabel .= "<td>$item</td>";
        $tabel .= "<td>" . $_SESSION['fruit'][$teller] . "</td>";
        $tabel .= "<td>" . $_SESSION['toetje'][$teller] . "</td>";
        $tabel .= "</tr>";

        $teller++;
    }
    $tabel .= "</table>";
    return $tabel;
}

?>

<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post"><table>
            <tr>
                <td>groenten</td>
                <td><input type="text" name="groente"></td>
            </tr>
            <tr>
                <td>Fruit</td>
                <td><input type="text" name="fruit"></td>
            </tr>
            <tr>
                <td>Toetje</td>
                <td><input type="text" name="toetje"></td>
            </tr>
            <td>
                <input type="submit" name="submit">
            </td>
        </table>
    </form>
    <div> <br> <?=tableMaken() ?></div>
</body>
</html>
