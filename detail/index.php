<style>
.detail_wrp {
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    width: 400px;
}
.detail_wrp_row {
    display: flex;
    justify-content: space-between;
}
    </style>
<?
header('Content-Type: text/html; charset=utf-8');
$data = $_POST;
$id = $_GET['id'];
$db = mysqli_connect("172.27.0.2", "zitreym", "Despxamv123", "sklad");
mysqli_set_charset($db, "utf8mb4");
$sql = "SELECT * FROM sklad_it WHERE id = '$id'"; 
$result = mysqli_query($db, $sql);
$result = mysqli_fetch_all($result);
?>
<div class="detail_wrp">
<div class="detail_wrp_row">
<p>Наименование:</p>
<p><?echo ($result["0"]["1"]) ?></p>
</div>
<div class="detail_wrp_row">
<p>Категория:</p>
<p><?echo ($result["0"]["3"]) ?></p>
</div>
<div class="detail_wrp_row">
<p>Состояние:</p>
<p><?echo ($result["0"]["4"]) ?></p>
</div>
<div class="detail_wrp_row">
<p>Расположение:</p>
<p><?echo ($result["0"]["5"]) ?></p>
</div>
<div class="detail_wrp_row">
<p>Цена:</p>
<p><?echo ($result["0"]["6"]) ?></p>
</div>
<div class="detail_wrp_row">
<p>Комментарий:</p>
<p><?echo ($result["0"]["7"]) ?></p>
</div>
<div class="detail_wrp_row">
<p>Последняя дата проверки:</p>
<p><?echo ($result["0"]["8"]) ?></p>
</div>
</div>