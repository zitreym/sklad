<?
header('Content-Type: text/html; charset=utf-8');
$id = $_POST["id"];
$db = mysqli_connect("localhost", "root", "Oclentepe123!", "sklad");
mysqli_set_charset($db, "utf8mb4");
$sql = "SELECT * FROM sklad_it WHERE `sklad_it`.`id` = '$id'";
$result = mysqli_query($db, $sql);
$result = mysqli_fetch_all($result);
$sql1= 'SELECT name FROM products order by name asc';
$sql2= 'SELECT name FROM category order by name asc';
$sql3= 'SELECT name FROM place order by name asc';
$result1 = mysqli_query($db, $sql1);
$result1 = mysqli_fetch_all($result1);
$result2 = mysqli_query($db, $sql2);
$result2 = mysqli_fetch_all($result2);
$result3 = mysqli_query($db, $sql3);
$result3 = mysqli_fetch_all($result3);
    ?>
            <!-- Строка категории -->
            <div class="row_wrp">
            <select id="wrpcategory" class="js-select1" name="category">
                <option value="<?echo $result["0"]["3"]?>"><?echo $result["0"]["3"]?></option>
<?
    foreach ($result2 as $category) {
?><option value="<?echo ($category["0"]);?>"><?echo ($category["0"]);?></option><?
    }
?>
            </select>
            <p class="add_button" onclick='
                showDialog({
                  title: `Добавление новой категории`, 
                  message: `<input type="text" name="new_category" placeholder="Новая категория">`,
                  category: {
                      new_category: ""
                  },
                  buttons: {
                      "Добавить": function(category){
                        $.ajax({ type: "POST",
                        url: "add_category.php",
                        data: category,
                        success: function(response){
                            if(response == "error"){
                            alert("error");
                            return false;
                            }
                         $("#wrpcategory").append(response);
                        alert("Категория добавлена");
                    }
                    })
                      }
                  }
              })
'>+</p>
            </div>
            <!-- Строка наименования -->
            <div class="row_wrp">
            <select id="wrpproduct" class="js-select0" name="product">
                <option value="<?echo $result["0"]["1"]?>"><?echo $result["0"]["1"]?></option>
<?
    foreach ($result1 as $product) {
?><option value="<?echo ($product["0"]);?>"><?echo ($product["0"]);?></option><?
    }
?>
            </select>
            <p class="add_button" onclick='
                showDialog({
                  title: `Добавление нового наименования`, 
                  message: `<input type="text" name="new_product" placeholder="Новое наименование">`,
                  product: {
                      new_product: ""
                  },
                  buttons: {
                      "Добавить": function(product){
                        $.ajax({ type: "POST",
                        url: "add_product.php",
                        data: product,
                        success: function(response){
                            if(response == "error"){
                            alert("error");
                            return false;
                            }
                         $("#wrpproduct").append(response);
                        alert("Наименование добавлено");
                    }
                    })
                      }
                  }
              })
'>+</p>
            </div>      
                        <!-- Строка места -->      
            <div class="row_wrp">
            <select id="wrpplace"  class="js-select3" name="place">
                <option value="<?echo $result["0"]["5"]?>"><?echo $result["0"]["5"]?></option>
<?
    foreach ($result3 as $place) {
?><option value="<?echo ($place["0"]);?>"><?echo ($place["0"]);?></option><?
    }
?>
            </select>
            <p class="add_button" onclick='
                showDialog({
                  title: `Добавление нового расположения`, 
                  message: `<input type="text" name="new_place" placeholder="Новое расположение">`,
                  place: {
                      new_place: ""
                  },
                  buttons: {
                      "Добавить": function(place){
                        $.ajax({ type: "POST",
                        url: "add_place.php",
                        data: place,
                        success: function(response){
                            if(response == "error"){
                            alert("error");
                            return false;
                            }
                         $("#wrpplace").append(response);
                        alert("Расположение добавлено");
                    }
                    })
                      }
                  }
              })
'>+</p>
            </div>
            <div class="row_wrp">
            <select  class="js-select2" name="status">
                <option value="<?echo $result["0"]["4"]?>"><?echo $result["0"]["4"]?></option>
                <option value="1">Отличное</option>
	            <option value="2">Есть неисправности</option>	
	            <option value="3">Не работает</option>
            </select>
            </div>
            <div class="row_wrp">
            <input class="row_price" value="<?echo $result["0"]["6"]?>" type="number" placeholder="Цена" name="price">
            <p class="ruble">₽</p>
            </div>
            <input type="text" value="<?echo $result["0"]["7"]?>" name="comment" class="row_wrp row_price" placeholder="Комментарий">
            <input type="hidden" value="<?echo $result["0"]["0"]?>" name="id">
            <input class="submit_button" type="submit" value="Обновить">
