<?php include("../tools/bdd.php");
/*verification de l'authentification*/
	/*redirection vers la page de connexion et effac l'ensemble des données liés à la session en cours en cas */
	session_start();
	if (empty($_SESSION)) {
		header('Location:../loginpage.php?msg=nonco');
	  	exit();}
	elseif (empty($_POST['nomTest'])) {
		header('Location:../userpages/photo.php?msg=pasTest');
		exit();};

	/*requête bash avec comme varible     $_POST['nomTest']
	     */
	shell_exec("export projet= $_POST['nomTest']")
	/*redirection sur la page d'origine*/
header('Location:../userpages/photo.php');
exit();
?>