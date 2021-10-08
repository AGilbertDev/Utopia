<?php
/*--------------------------------------------------------------------------------------------
    File: dbHandler.php
    Author: Alexandre Gilbert
    Description: Back-end database handler that manages all database manipulations.
--------------------------------------------------------------------------------------------*/

/*--------------------------------------------------------------------------------------------
                                      SQL database connection        
--------------------------------------------------------------------------------------------*/
/* Database info */
$serverName = "sql303.epizy.com";
$dBUsername = "epiz_27840253";
$dbPassword = "hQbvbaCZR4";
$dbName = "epiz_27840253_utopiaDB";

/* Connection */
$conn = mysqli_connect($serverName, $dBUsername, $dbPassword, $dbName);
 
if (!conn) {
    die("Echec de la connexion" .mysqli_connect_error());
}