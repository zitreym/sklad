<?
header('Content-Type: text/html; charset=utf-8');
$data = $_POST;
$db = mysqli_connect("localhost", "root", "Oclentepe123!", "sklad");
mysqli_set_charset($db, "utf8mb4");
$name = $data["name"];
$category = $data["category"];
$status = $data["status"];
$place = $data["place"];
$price = $data["price"];
$comment = $data["comment"];
$id = $data["id"];
$sql = "UPDATE `sklad_it` SET `name` = '$name', `category` = '$category', `status` = '$status', `place` = '$place', `price` = '$price', `comment` = '$comment' WHERE `sklad_it`.`id` = $id";
mysqli_query($db, $sql);
?>
