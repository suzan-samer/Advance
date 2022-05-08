<?php

//declare assositive array db
$db['db_host'] = 'localhost';
$db['db_user'] = 'root';
$db['db_pass'] = '';
$db['db_name'] = 'shop';

//use loop to declare constant variable so we cant change it
//strtoupper convert constant variable to upper
foreach ($db as $key => $value) {
    define(strtoupper($key), $value);
}
//mysqli function take four parameters
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($conn) {
    // echo 'connected';
} else {
    //die make stop the website if we have error
    die('error :' . mysqli_connect_error());
}
