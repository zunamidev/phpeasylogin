<?php

/**
 * User: zunami
 * Date: 18.11.18
 * Time: 15:55
 **/

session_start();

$formusername = $_POST["yourformname"]

$con = mysqli_connect("yourhost", "yourusername", "yourpasswort", "yourdatabase");
$sql = "SELECT * FROM benutzer WHERE name='" . $formusername . "'";
$res = mysqli_query($con, $sql);
if(mysqli_num_rows($res) > 0) {
    $dsatz = mysqli_fetch_assoc($res);
    if(password_verify($_POST["pw"], $dsatz["pw"])) {
        header( "Location: https://yourdashboard");
        $_SESSION["n"] = $_POST["na"];
        if($_POST["rm"] == 1) {
            setcookie("login", "n");
        }
    } else {
        header("Refresh:5; url=https://young-devs.com/zunami/02auth/poll/", true, 303);
        echo "Login not allowed";
    }
}

mysqli_close($con);
