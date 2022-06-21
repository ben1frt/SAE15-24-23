<?php include("../tools/bdd.php");
/*verification de l'authentification*/
	/*redirection vers la page de connexion et effac l'ensemble des données liés à la session en cours en cas */
	session_start();
	if (empty($_SESSION)) {
		header('Location:../loginpage.php?msg=nonco');
	  	exit();};
	/*test si l'utilisateur est un admin*/
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
	if (empty($_POST)) {
		header('Location:../userpages/accueil.php');
		exit();
	};

	/*DELETE FROM logs WHERE login='pm' AND (date='04/06/22 à 03:06' OR date='06/06/22 à 00:06')*/
	
	$p=$_SESSION['pathTest']."' AND (";

	foreach ($_POST as $key => $value) {
		$p=$p." nomImg='$value' OR ";
		shell_exec("rm /var/www/web-Thales/userpages/Images/{$_SESSION['pathTest']}/$value")
	};

	$p=$p."nomImg='a' )";
	$sql="DELETE FROM IMAGES WHERE nomTest='".$p;
	$req=$bd->prepare($sql);
	$req->execute();
	$req->closeCursor();

	/*met à jour la bdd pour les logs de suppressions*/
	$date=date('d/m/y \à H:m');
	$sql3="INSERT INTO LOGS (login, action, date) VALUES ('".$_SESSION['log']."','a supprimé {count($_POST)-1} images du {$_SESSION['pathTest']}','$date');";
	$req3=$bd->prepare($sql3);
	$req3->execute();
	$req3->closeCursor();

	header('Location:../userpages/accueil.php');
	exit();

?>