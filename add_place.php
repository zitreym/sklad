<?
header('Content-Type: text/html; charset=utf-8');
$data = $_POST;
$db = mysqli_connect("localhost", "root", "Oclentepe123!", "sklad");
mysqli_set_charset($db, "utf8mb4");
$new_place = $data["new_place"];
$sql = "INSERT INTO `place` (`id`, `name`) VALUES (NULL, '$new_place')";
mysqli_query($db, $sql);
?>
<option value="<?echo $new_place;?>"><?echo $new_place;?></option>