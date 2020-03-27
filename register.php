<?php
/**
 * User: zunami
 * Date: 18.11.18
 * Time: 15:44
 **/

session_start();
$pw1 = password_hash($_POST["pw"], PASSWORD_DEFAULT);
$name = $_POST["na"];

$con = mysqli_connect(host, username, passwort, database);
$sql = "SELECT * FROM username WHERE name='" . $name . "'";
$res = mysqli_query($con, $sql);
$num = mysqli_num_rows($res);

if($num > 0) {
    header( "Refresh:5; url=https://yourreadirecterror.com", true, 303);
    echo "Already exists";
} else {
    $sql = "INSERT INTO benutzer(name, pw) VALUES ('$name', '$pw1')";
    mysqli_query($con, $sql);
    echo "Account createdt";
    header( "Refresh:5; url=https://yourreadirect.com", true, 303);
    $_SESSION["n"] = $_POST["na"];

}
mysqli_close($con);
