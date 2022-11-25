<?
require("header.php");
?>
<?
$db = mysqli_connect("172.27.0.2", "zitreym", "Despxamv123", "sklad");
mysqli_set_charset($db, "utf8mb4");
$sql = 'SELECT * FROM sklad_it order by name asc'; 
$sql1= 'SELECT name FROM products order by name asc';
$sql2= 'SELECT name FROM category order by name asc';
$sql3= 'SELECT name FROM place order by name asc';
$result = mysqli_query($db, $sql);
$result = mysqli_fetch_all($result);
$result1 = mysqli_query($db, $sql1);
$result1 = mysqli_fetch_all($result1);
$result2 = mysqli_query($db, $sql2);
$result2 = mysqli_fetch_all($result2);
$result3 = mysqli_query($db, $sql3);
$result3 = mysqli_fetch_all($result3);
?>
<div class="wrapper_table">
<select onchange="filter(event.target.value);" id="category_search" class="js-select1" name="category">
                <option value=""></option>
<?
    foreach ($result2 as $category) {
?><option value="<?echo ($category["0"]);?>"><?echo ($category["0"]);?></option><?
    }
?>
            </select>
</div>
    <div class="wrapper_table">
    <p class="header_table class_id">ID</p>
    <p class="header_table table_name">Название</p>
    <p class="header_table">Код</p>
    <p class="header_table">Категория</p>
    <p class="header_table class_stat">Состояние</p>
    <p class="header_table">Принадлежность</p>
    <p class="header_table">Стоимость</p>
    <p class="header_table">Комментарий</p>
    <p class="header_table">Дата</p>
    <a href="javascript:PopUpShow()" class="header_table">Добавить</a>
</div>
<div id="wrptables">
<?
foreach ($result as $value) {
    ?>
    <div class="wrapper_table">
        <p class="text_table class_id"><?echo $value['0'];?></p>
        <p class="text_table table_name"><?echo $value['1'];?></p>
        <div class="text_table barcode"><img src="http://192.168.150.242/qr/?id=<? echo $value['0'];?>" alt=""></div>
        <p class="text_table"><?echo $value['3'];?></p>
        <div class="text_table barcode class_stat"><div class="status_table" style="background: <?
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
            <a href="http://192.168.150.242/qr/print.php?id=<? echo $value['0'];?>" target="blank" class="button_print"></a>
            <p onclick="editrow(<?echo $value['0'];?>)" class="button_edit"></p>   
            <p onclick="delrow(this,<?echo $value['0'];?>)" class="data-id button_remove"></p>
        </div>
    </div>
<?
}
?>
</div>
<div>
Всего элементов: <? echo (count($result)); ?>
</div>
<script>
function editrow(id) {
    console.log(id);
    $.ajax({ type: 'POST',
    url: 'edit.php',
    data: {id: id},
    success: function(response){
        $("#form2").html(response);
    }
    });
    PopUpShow2();
}
function delrow(el,id){
    $.ajax({ type: 'POST',
    url: 'remove.php',
    data: {id: id},
    success: function(response){
        $(el).closest('.wrapper_table').remove();
    }
    });
};
function filter(param){
    $.ajax({ type: 'POST',
    url: 'search.php',
    data: {param: param},
    success: function(response){
        $("#wrptables").html(response);
    }
    });
}
</script>
<?
require("footer.php");
?>
