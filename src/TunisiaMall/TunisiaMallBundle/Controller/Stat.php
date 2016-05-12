<?php
namespace TunisiaMall\TunisiaMallBundle\Controller;
use Mysqli;

 class Stat {
     function compter()
     {
         
$name='count';
$uIP = $_SERVER['REMOTE_ADDR'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tunisiamalldb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if (!isset($_COOKIE['count']))
    {
    $_COOKIE['count']='';
$cookie = (++$_COOKIE['count']);
setcookie("count", $cookie);

$sql = "INSERT INTO visitor (id,ip)
VALUES ('','".$uIP."')";

if ($conn->query($sql) === TRUE) {
   
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}



$cnx = mysql_connect( "localhost", "root", "" );
//sélection de la base de données:
$db= mysql_select_db( "tunisiamalldb" );
$return =0;
$new=0;
$totale =0;
$return_condition=false;
$sql1 = "SELECT * FROM visitor";
$occurence="SELECT COUNT(DISTINCT ip) FROM visitor";
$totale_req="SELECT Count(*) from visitor";
$requete = mysql_query( $occurence, $cnx ) or die( "ERREUR MYSQL numéro: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
$requete1 = mysql_query( $totale_req, $cnx ) or die( "ERREUR MYSQL numéro: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );

while( $result = mysql_fetch_array( $requete ) )
{
$new=$result[0];

}
while( $result = mysql_fetch_array( $requete1 ) )
{
$totale=$result[0];

}
$return=$totale-$new;



$sql2 = "Update statistique set `new`='".$new."',`retu`='".$return."',`totale`='".$totale."' where id='30'";
if (($conn->query($sql2) === TRUE))  {
   
} else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
}

$conn->close();
 }
 }
 ?>