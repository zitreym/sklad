<?
header('Content-Type: text/html; charset=utf-8');
$id = $_POST["id"];
$db = mysqli_connect("localhost", "root", "Oclentepe123!", "sklad");
mysqli_set_charset($db, "utf8mb4");
var_dump($id);
$sql = "DELETE FROM sklad_it WHERE `sklad_it`.`id` = '$id'";
mysqli_query($db, $sql);
?>