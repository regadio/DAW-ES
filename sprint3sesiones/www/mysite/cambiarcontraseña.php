<?php
$db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die('Fail');
session_start();
$user = 'NULL';
if (!empty($_SESSION['id'])) {
    $user = $_SESSION['id'];
}
$p_ant = $_POST['pass1'];
$p_nueva = $_POST['pass2'];
$rep_p_nueva = $_POST['pass3'];

$query = "SELECT contraseña FROM tusuario WHERE id=".$user;
$result = mysqli_query($db, $query) or die('Query error');

if (mysqli_num_rows($result) > 0) {
    $only_row = mysqli_fetch_array($result);
    if ($only_row[0] == $p_ant) {
        if ($rep_p_nueva == $p_nueva) {
            $query2 = "UPDATE tusuario SET contraseña = '".$p_nueva."' where id =".$user;
            $result = mysqli_query($db, $query2) or die('Query error');
            echo '<p>contraseña cambiada</p>';
        } else {
            echo '<p>La contraseña nueva debe coincidir </p>';
        }
    } else {
        echo '<p>contraseña incorrecta</p>';
    }
} else {
    echo '<p>Usuario no encontrado con ese email</p>';
}
?>