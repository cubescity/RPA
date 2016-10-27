<?php

//change the following to your specific environment
$serverip = "10.50.10.50";
$serverport = "1438";
$dbuser = "dbusername";
$dbpass = "dbpassword";
$dbname = "dbname";




function connectnow() {
   $cs = mssql_connect ( '$serverip,$serverport', '$dbuser', '$dbpass' ) or die ( 'Cannot connect to server' );
   mssql_select_db ( '[$dbname]', $cs ) or die ( 'Can not select database' );
}


?>