<?
header('Content-Type: text/html; charset=utf-8');
$data = $_POST;
$db = mysqli_connect("localhost", "root", "Oclentepe123!", "sklad");
mysqli_set_charset($db, "utf8mb4");
$new_product = $data["new_product"];
$sql = "INSERT INTO `products` (`id`, `name`) VALUES (NULL, '$new_product')";
mysqli_query($db, $sql);
?>
<option value="<?echo $new_product;?>"><?echo $new_product;?></option>