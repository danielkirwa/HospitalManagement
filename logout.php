<?php
	session_start();
	if(session_destroy($_SESSION['login'])){
		echo "<script type = 'text/javascript'>location.href ='Home.php'</script>";
	}
?>