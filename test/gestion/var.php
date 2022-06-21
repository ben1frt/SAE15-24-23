<?php 
/*verification de l'authentification*/
	/*redirection vers la page de connexion et effac l'ensemble des données liés à la session en cours en cas */
	session_start();
	if (empty($_SESSION)) {
		header('Location:../loginpage.php?msg=nonco');
	  	exit();};
	if (!isset($_SESSION['admin'])) {
		$_SESSION=array();
		if (ini_get("session.use_cookies")) {
    		$params = session_get_cookie_params();
    		setcookie(session_name(), '', time() - 42000,
        	$params["path"], $params["domain"],
        	$params["secure"], $params["httponly"]);
		}
		session_destroy();
		if (empty($_SESSION)) {
			header('Location:../loginpage.php?msg=droits');
	 		exit();
		}	
	}
/*redirige si l'utilisteur est connecté mais n'a pas envoyé de requête post */
$_SESSION['gestion']=[];

	if (empty($_GET)) {		
		header('Location:../userpages/gestion.php');
		exit();};

	if ($_GET['page']=="nouv") {
		$_SESSION['gestion']="nouv";
		header('Location:../userpages/gestion.php');
		exit();}

	elseif ($_GET['page']=="chang") {
		$_SESSION['gestion']="chang";
		header('Location:../userpages/gestion.php');
		exit();};
?>