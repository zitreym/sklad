<?
header('Content-Type: text/html; charset=utf-8');
$param = $_POST["param"];
$db = mysqli_connect("172.27.0.2", "zitreym", "Despxamv123", "sklad");
mysqli_set_charset($db, "utf8mb4");
$sql = "SELECT * FROM sklad_it WHERE `sklad_it`.`category` = '$param'";
$result = mysqli_query($db, $sql);
$result = mysqli_fetch_all($result);
foreach ($result as $value) {
    ?>
    <div class="wrapper_table">
        <p class="text_table"><?echo $value['0'];?></p>
        <p class="text_table table_name"><?echo $value['1'];?></p>
        <div class="text_table barcode"><img src="http://node2.treym.ru/qr/?id=<? echo $value['0'];?>" alt=""></div>
        <p class="text_table"><?echo $value['3'];?></p>
        <div class="text_table barcode"><div class="status_table" style="background: <?
        switch ($value['4'])
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
        <p class="text_table"><?echo $value['5'];?></p>
        <p class="text_table"><?echo $value['6'];?></p>
        <p class="text_table"><?echo $value['7'];?></p>
        <p class="text_table"><?echo $value['8'];?></p>
        <div class="text_table wrp_buttons">
            <a href="http://node2.treym.ru/qr/print.php?id=<? echo $value['0'];?>" target="blank" class="button_print"></a>
            <p class="button_edit"></p>   
            <p onclick="delrow(this,<?echo $value['0'];?>)" class="data-id button_remove"></p>
        </div>
    </div>
<?
}
?>