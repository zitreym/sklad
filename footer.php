<div class="b-popup" id="popup2">
    <div class="b-popup-content">
    <h3 style="text-align: center;">Редактирование товара</h3>
        <form id="form2" class="form">
        </form>
    <a class="popup_exit" href="javascript:PopUpHide2()"></a>
    </div>
</div>
<div class="b-popup" id="popup1">
    <div class="b-popup-content">
        <h3 style="text-align: center;">Добавление товара</h3>
        <form id="form" class="form">
            <!-- Строка категории -->
            <div class="row_wrp">
            <select id="wrpcategory" class="js-select1" name="category">
                <option value=""></option>
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
                <option value=""></option>
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
                <option value=""></option>
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
                <option value=""></option>
                <option value="1">Отличное</option>
	            <option value="2">Есть неисправности</option>	
	            <option value="3">Не работает</option>
            </select>
            </div>
            <div class="row_wrp">
            <input class="row_price" type="number" placeholder="Цена" name="price">
            <p class="ruble">₽</p>
            </div>
            <input type="text" name="comment" class="row_wrp row_price" placeholder="Комментарий">
            <input class="submit_button" type="submit" value="Добавить">
        </form>
    <a class="popup_exit" href="javascript:PopUpHide()"></a>
    </div>
</div>
<link rel="stylesheet" href="https://snipp.ru/cdn/select2/4.0.13/dist/css/select2.min.css">
<style type="text/css">
.select_wrp {
	width: 300px;
	margin: 0 auto;
}
</style>

<script src="https://snipp.ru/cdn/jquery/2.1.1/jquery.min.js"></script>
<script src="https://snipp.ru/cdn/select2/4.0.13/dist/js/select2.min.js"></script>
<script src="https://snipp.ru/cdn/select2/4.0.13/dist/js/i18n/ru.js"></script>
<script>
$(document).ready(function() {
	$('.js-select2').select2({
		placeholder: "Выберите город",
		maximumSelectionLength: 2,
		language: "ru"
	});
});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script>
     const form2 = document.getElementById('form2');
     form2.addEventListener('submit', getFormValue2);
     function getFormValue2(event) {
    event.preventDefault();    
    var product = form2.querySelector('[name="product"]'), 
    category = form2.querySelector('[name="category"]'), 
    status = form2.querySelector('[name="status"]'), 
    place = form2.querySelector('[name="place"]'), 
    price = form2.querySelector('[name="price"]'), 
    comment = form2.querySelector('[name="comment"]'), 
    id = form2.querySelector('[name="id"]'), 
    data = {
    name: product.value,
    category: category.value,
    status: status.value,
    place: place.value,
    price: price.value,
    comment: comment.value,
    id: id.value
};
update(data);
}
    $(document).ready(function(){
        PopUpHide2();
    });
    function PopUpShow2(){
        $("#popup2").show();
    }
    function PopUpHide2(){
        $("#popup2").hide();
    }
    function update(data){
                          $.ajax({ type: "POST",
                           url: "update.php",
data: data,
 success: function(response){
     if(response == 'error'){
         alert('error');
         return false;
     }
    alert("Товар обновлен");
  }
})
}
</script>
<script>
     const form = document.getElementById('form');
     form.addEventListener('submit', getFormValue);
     function getFormValue(event) {
    event.preventDefault();    
    var product = form.querySelector('[name="product"]'), 
    category = form.querySelector('[name="category"]'), 
    status = form.querySelector('[name="status"]'), 
    place = form.querySelector('[name="place"]'), 
    price = form.querySelector('[name="price"]'), 
    comment = form.querySelector('[name="comment"]'),
    data = {
    name: product.value,
    category: category.value,
    status: status.value,
    place: place.value,
    price: price.value,
    comment: comment.value
};
add(data)
}

    $(document).ready(function(){
        PopUpHide();
    });
    function PopUpShow(){
        $("#popup1").show();
    }
    function PopUpHide(){
        $("#popup1").hide();
    }
    function add(data){
                          $.ajax({ type: "POST",
                           url: "add.php",
data: data,
 success: function(response){
     if(response == 'error'){
         alert('error');
         return false;
     }
     $('#wrptables').append(response);
    alert("Товар добавлен");
  }
})
}
</script>
<link rel="stylesheet" href="select2.min.css">
<style type="text/css">
.select_wrp {
	width: 300px;
	margin: 0 auto;
}
</style>
<script src="https://snipp.ru/cdn/select2/4.0.13/dist/js/select2.min.js"></script>
<script src="https://snipp.ru/cdn/select2/4.0.13/dist/js/i18n/ru.js"></script>
<script>
$(document).ready(function() {
	$('.js-select2').select2({
		placeholder: "Укажите состояние",
		maximumSelectionLength: 2,
		language: "ru"
	});
});
$(document).ready(function() {
	$('.js-select1').select2({
		placeholder: "Выберите категорию",
		maximumSelectionLength: 2,
		language: "ru"
	});
});
$(document).ready(function() {
	$('.js-select3').select2({
		placeholder: "Расположение",
		maximumSelectionLength: 2,
		language: "ru"
	});
});
$(document).ready(function() {
	$('.js-select0').select2({
		placeholder: "Наименование",
		maximumSelectionLength: 2,
		language: "ru"
	});
});
</script>
</html>