<form>
	<input type="text" name="nome"/>
	<input type="date" name="nascimento"/>
	<input type="submit" value="ok"/>
</form>

<?php

$inputs = isset($_GET)?$_GET:"";

foreach($inputs as $key => $value){
	echo $key." / ".$value."<br/>";
}


?>