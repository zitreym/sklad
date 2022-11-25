<?
header('Content-Type: text/html; charset=utf-8');
?>
<style>
* {
    font-family: Areal;
}
.b-container{
    width:200px;
    height:150px;
    background-color: #ccc;
    margin:0px auto;
    padding:10px;
    font-size:30px;
    color: #fff;
}
.b-popup{
    width:100%;
    min-height:100%;
    background-color: rgba(0,0,0,0.5);
    overflow:hidden;
    position:fixed;
    top:0px;
}
.b-popup .b-popup-content{
    margin:40px auto 0px auto;
    width: 40%;
    height: 60vh;
    padding:10px;
    background-color: #c5c5c5;
    border-radius:5px;
    box-shadow: 0px 0px 10px #000;
}
.form {
    display: flex;
    flex-direction: column;
}
</style>
    <a href="javascript:PopUpShow()">Show popup</a>
<div class="b-popup" id="popup1">
    <div class="b-popup-content">
        <h3>Добавление товара</h3>
        <form id="form" class="form">
            <input type="text" name="name" value="name">
            <input type="text" name="category" value="category">
            <select  class="js-select2" name="status" name="status">
                <option value=""></option>
                <option value="1">Отличное</option>
	            <option value="2">Есть неисправности</option>	
	            <option value="3">Не работает</option>
                <option onclick="alert('hello');">Добавить</option>
            </select>
            <input type="text" name="place" value="place">
            <input type="text" name="price" value="price">
            <input type="text" name="comment" value="comment">
            <input type="submit" value="Добавить">
        </form>
    <a href="javascript:PopUpHide()">Hide popup</a>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script>
     const form = document.getElementById('form');
     form.addEventListener('submit', getFormValue);
     function getFormValue(event) {
    event.preventDefault();    
    var name = form.querySelector('[name="name"]'), //получаем поле name
    category = form.querySelector('[name="category"]'), //получаем поле age
    status = form.querySelector('[name="status"]'), //получаем поле terms
    place = form.querySelector('[name="place"]'), //получаем поле plan
    price = form.querySelector('[name="price"]'), //получаем поле plan
    comment = form.querySelector('[name="comment"]'), //получаем поле plan
    data = {
    name: name.value,
    category: category.value,
    status: status.value,
    place: place.value,
    price: price.value,
    comment: comment.value
};
console.log(data);
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
                          console.log(data);
                          $.ajax({ type: "POST",
                           url: "add.php",
data: data,
 success: function(response){
    alert("Товар добавлен");
  }
})
}
</script>
<link rel="stylesheet" href="https://snipp.ru/cdn/select2/4.0.13/dist/css/select2.min.css">
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
</script>