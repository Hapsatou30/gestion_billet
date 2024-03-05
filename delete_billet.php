<?php  
require_once "config.php";

$id = $_GET["id_billet"];
$sql = "DELETE FROM `billet` WHERE id_billet = '$id'";
if (mysqli_query($connexion, $sql)) {
    header("location: read_billet.php");
} else {
     echo "Something went wrong. Please try again later.";
}
?>