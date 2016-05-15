<?php
$valeur = $_GET['valeur'] ;
$id = $_GET['id'] ;
// Create connection
$conn = new mysqli("localhost","root","", "tunisiamalldb");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql="UPDATE `tunisiamalldb`.`panier` SET `qte` = '$valeur' WHERE `panier`.`id` = $id";
if ($conn->query($sql) === TRUE) {
} else {
}
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("tunisiamalldb",$con);
$req="SELECT prix,qte FROM panier where id = $id";
$data=mysql_query($req) or die(mysql_error());
$totale=0;
while ($row = mysql_fetch_array($data))
{
	echo $row['prix']*$row['qte'];
	$totale=$row['prix']*$row['qte'];
	$sql="UPDATE `tunisiamalldb`.`panier` SET `totale` = '$totale' WHERE `panier`.`id` = $id";
if ($conn->query($sql) === TRUE) {
} else {
}
}
$conn->close();
?>