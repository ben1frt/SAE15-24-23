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
		header('Location:../userpages/gestion.php');
		exit();};

$date=date('d/m/y \à H:m');

/*requête si l'utilisateur doit être supprimé*/
if ($_POST['actForm']=="suppr"){
	$sql="DELETE FROM PERSONNEL WHERE login='{$_POST['nomUser']}'";
	$sql3="INSERT INTO LOGS (login, action, date) VALUES ('".$_SESSION['log']."','a supprimé l\'utilisateur {$_POST['nomUser']}','$date');";
}

	/*test pour voir si les mdp sont pareils*/
else{
	if (isset($_POST['newMdp']) && ($_POST['newMdp']!=$_POST['confirmMdp'])) {
		header('Location:../userpages/gestion.php?msg=diff');
		exit();
	};

/*début de la requête */
	/*cryptage du mdp*/
	$mdpc=md5($_POST['newMdp']);

	/*requête si changement de mdp*/
	if ($_POST['actForm']=="change"){
		/*test si l'utilisateur existe*/
		$sql="SELECT COUNT(login) as 'ver' FROM PERSONNEL WHERE login='{$_POST['USER']}'";
		$req=$bd->prepare($sql);
		$req->execute();
		$rep=$req->fetchColumn();
		$req->closeCursor();
		if ($rep==0) {
			header('Location:../userpages/gestion.php?msg=nonE');
			exit();
		};
	
		/*récupère l'ancien mdp*/
		$sql6="SELECT mdp FROM PERSONNEL WHERE login='{$_POST['USER']}'";
		$req6=$bd->prepare($sql6);
		$req6->execute();
		$rep6=$req6->fetch();
		$req6->closeCursor();

		/*vérifie si le mot de passe à déja été utilisé*/
		$sql2="SELECT COUNT(mdp) as 'ver' FROM LASTMDP WHERE login='{$_POST['USER']}' AND mdp='$mdpc";
		$req2=$bd->prepare($sql2);
		$req2->execute();
		$rep2=$req2->fetchColumn();
		$req2->closeCursor();

		/*test si le mdp est le même*/
		if ($rep6[0]==$mdpc || $rep2>=1) {
			header('Location:../userpages/gestion.php?msg=$rep2');
			exit();
		};

		/*stocke le précédent mdp*/
		$sql5="INSERT INTO LASTMDP (login, mdp) VALUES ('{$_POST['USER']}','$rep6[0]');";
		$req5=$bd->prepare($sql5);
		$req5->execute();
		$req5->closeCursor();

		/*compte le nombre de mdp stockés*/
		$sql4="SELECT COUNT(mdp) as 'ver' FROM LASTMDP WHERE login='{$_POST['USER']}'";
		$req4=$bd->prepare($sql4);
		$req4->execute();
		$rep4=$req4->fetchColumn();
		$req4->closeCursor();
		if ($rep4>15) {
			/*récupère le mdp le plus ancien*/
			$sql7="SELECT mdp FROM LASTMDP WHERE login='{$_POST['USER']}";
			$req7=$bd->prepare($sql7);
			$req7->execute();
			$rep7=$req7->fetch();
			$req7->closeCursor();

			/*suprime le 16è mdp de la liste*/
			$sql8="DELETE FROM LASTMDP WHERE mdp='$rep7[0]'";
			$req8=$bd->prepare($sql8);
			$req8->execute();
			$req8->closeCursor();
		};



		$sql="UPDATE PERSONNEL SET mdp='$mdpc', cpt_renouvellement=90  WHERE login='{$_POST['USER']}'";
		$sql3="INSERT INTO LOGS (login, action, date) VALUES ('".$_SESSION['log']."','a changé le mot de passe de l'utilisateur {$_POST['USER']}','$date');";
	}

/*requête si l'utilisateur est créé*/
	elseif ($_POST['actForm']=="new"){
		/*test si l'utilisateur existe*/
		$sql="SELECT COUNT( DISTINCT login) as 'ver' FROM LOGS WHERE login='{$_POST['USER']}'";
		$req=$bd->prepare($sql);
		$req->execute();
		$rep=$req->fetchColumn();
		$req->closeCursor();
		if ($rep==1) {
			header('Location:../userpages/gestion.php?msg=existe');
			exit();
		};
		/*stocke le mdp*/
		$sql5="INSERT INTO PERSONNEL (login, mdp) VALUES ('{$_POST['USER']}','$mdpc');";
		$req5=$bd->prepare($sql5);
		$req5->execute();
		$req5->closeCursor();

		$sql="INSERT INTO PERSONNEL (nom, prenom, login, mdp, admin, cpt_renouvellement) VALUES ('{$_POST['nom']}','{$_POST['prenom']}','{$_POST['USER']}','$mdpc','{$_POST['admin']}',90);";

		$sql3="INSERT INTO LOGS (login, action, date) VALUES ('".$_SESSION['log']."','a créé l'utilisateur {$_POST['USER']}','$date');";
	}
} 

	$req=$bd->prepare($sql);
	$req->execute();
	$req->closeCursor();


	/*met à jour la bdd pour les logs de gestion des utilisateurs*/
	$req3=$bd->prepare($sql3);
	$req3->execute();
	$req3->closeCursor();


	/*redirige vers la pagepour continuer la navigation*/
	header('Location:../userpages/gestion.php?msg=confirm');
	exit();
?>