<?
	$mysqli = @new mysqli('localhost', 'v_94087_new', '2poSozko', 'v_94087_itgurunew');
	if (mysqli_connect_errno()) {
		echo "Подключение невозможно: ".mysqli_connect_error();
	}
	$mysqli->query("SET NAMES 'utf8'");
?>