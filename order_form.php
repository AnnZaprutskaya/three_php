<form id="order_form" name="order_form" method="post" action="basket.php" onsubmit="basket.php" class="col-md-12 col-xs-12">
	<p>Введите адрес, по которому будет доставлен заказ:</p>
    <input type="text" name="address" required maxlength="35" size="35">
    <p>Введите предпочтительное время доставки:</p>
    <input type="text" name="time_pref" maxlength="15" size="15">
    <input type="hidden" value="1" name="order_f" />
    <input type="submit" name="order_submit" value="Заказать"> 
</form>