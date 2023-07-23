<?php

$dbHost = "sql307.epizy.com";
$dbUser = "epiz_33912665";
$dbPassword = "2Zz8TjBTffYjE1j";
$dbName = "epiz_33912665_contacts_list";

$conn = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);

if (!$conn) {
    die("Failed to Connect to the Database!");
}
