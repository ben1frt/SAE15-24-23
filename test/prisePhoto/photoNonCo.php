²<?php include("../tools/bdd.php");
	if (empty($_POST['nomTest'])) {
		header('Location:../loginpage.php?msg=pasTest');
		exit();};

	/*requête bash avec comme varible     $_POST['nomTest']*/
	     
	shell_exec("python3/home/pi/Downloads/PrisePhotoW {$_POST['nomTest']}")
	/*redirection sur la page d'origine*/
header('Location:../loginpage.php');
exit();
?>