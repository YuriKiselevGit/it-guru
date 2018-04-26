<?php
require(__DIR__.'/include/dbstuio.php');
if($_GET['login']!='')
{
	$query = "SELECT * FROM base WHERE login LIKE '".$_GET['login']."' AND pass LIKE '".$_GET['pass']."'";
	$rez = $mysqli->query($query);	
	if (!$rez) 
		{echo "Error. User not found";}
	else
	{	
		$rez = $rez->fetch_assoc();
		echo $rez['site'];
	}	
}
?>