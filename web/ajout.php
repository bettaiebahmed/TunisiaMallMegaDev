 <?php
require_once('connect.php');

mysql_select_db($database_localhost,$con);

$nom=$_GET['nom'];
$reduction=$_GET['reduction'];
$reduction=$_GET['dateDebut'];
$reduction=$_GET['dateFin'];

mysql_query("INSERT INTO promotion VALUES ('','$nom','$reduction','$dateDebut','$dateFin') ");
echo "OK";
?>