<?
header('Content-Type: text/html; charset=utf-8');
$data = $_POST;
$db = mysqli_connect("localhost", "root", "Oclentepe123!", "sklad");
mysqli_set_charset($db, "utf8mb4");
$new_category = $data["new_category"];
$sql = "INSERT INTO `category` (`id`, `name`) VALUES (NULL, '$new_category')";
mysqli_query($db, $sql);
?>
<option value="<?echo $new_category;?>"><?echo $new_category;?></option>