<?
global $mysqli; 
$mysqli = new mysqli("localhost", "studio", "Vy7py6%6", "mybeutystudio");
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	die();
}
?>