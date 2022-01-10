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
$serverName = "****************";
$dBUsername = "**********";
$dbPassword = "************";
$dbName = "********";

/* Connection */
$conn = mysqli_connect($serverName, $dBUsername, $dbPassword, $dbName);
 
if (!conn) {
    die("Echec de la connexion" .mysqli_connect_error());
}
