<?php

require_once ('db_credentials');

function db_connect(): bool|mysqli|null
{
    confirm_db_connect();
    return mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
}

function db_disconnect($connection){
    if(isset($connection)){
        mysqli_close($connection);
    }
}

function confirm_db_connect(){
    if(mysqli_connect_errno()) {
        $msg = "Database connection failed: ";
        $msg .= mysqli_connect_error();
        $msg .= " (" . mysqli_connect_errno() . ")";
        exit($msg);
    }
}

function confirm_result_set($result_set){
    if(!$result_set) {
        exit("Database query failed!");
    }
}

?>

