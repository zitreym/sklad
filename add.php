<?
header('Content-Type: text/html; charset=utf-8');
$data = $_POST;
$code = rand(1000000000, 9999999999);
$data["date"] = date('d.m.Y');
$db = mysqli_connect("172.27.0.2", "zitreym", "Despxamv123", "sklad");
mysqli_set_charset($db, "utf8mb4");
$name = $data["name"];
$category = $data["category"];
$status = $data["status"];
$place = $data["place"];
$price = $data["price"];
$comment = $data["comment"];
$date = $data["date"];
$sql = "INSERT INTO `sklad_it` (`id`, `name`, `code`, `category`, `status`, `place`, `price`, `comment`, `date`) VALUES (NULL, '$name', '$code', '$category', '$status', '$place', '$price', '$comment', '$date')";
mysqli_query($db, $sql);
$id = $db->insert_id;
if(!$id){
    die('error');
}
?>
<div class="wrapper_table">
    <p class="text_table"><?echo $id;?></p>
    <p class="text_table table_name"><?echo $name;?></p>
    <div class="text_table barcode"><img src="http://node2.treym.ru/qr/?id=<? echo $id;?>" alt=""></div>
    <p class="text_table"><?echo $category;?></p>
    <div class="text_table barcode"><div class="status_table" style="background: <?
    switch ($status)
    {
        case 1:
            echo "#43c75f";
            break;
        case 2:
            echo "#d7c816";
            break;
        case 3:
            echo "#d91010";
            break;
    }?>;"></div></div>
    <p class="text_table"><?echo $place;?></p>
    <p class="text_table"><?echo $price;?></p>
    <p class="text_table"><?echo $comment;?></p>
    <p class="text_table"><?echo $date;?></p>
    <div class="text_table wrp_buttons">
        <a href="http://node2.treym.ru/qr/print.php?id=<? echo $id;?>" target="blank" class="button_print"></a>
        <p class="button_edit"></p>   
        <p onclick="delrow(this,<?echo $id;?>)" class="data-id button_remove"></p>
    </div>
</div>