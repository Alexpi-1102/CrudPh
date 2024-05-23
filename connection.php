<?php
function connection (){
    $host = "Localhost";
    $user = "root";
    $pass = "";

    $bd = "users_crud";

    $connect = mysqli_connect($host, $user, $pass);

    mysqli_select_db($connect, $bd);

    return $connect;
};

?>