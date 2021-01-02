<?php

define(DB_SERVER, 'localhost');
define(DB_USERNAME, 'u562342975_beta');
define(DB_PASSWORD, 'Beta1234');
define(DB_NAME, 'u562342975_beta');

$connect = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!$connect){
    echo "DB has not connected to database.".mysql_error();
}
?>