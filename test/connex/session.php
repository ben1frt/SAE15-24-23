<?php
/*vérifie les identifiants de l'utilisateur et le redirige*/
	session_start();

	if (empty($_POST)) {
	header('Location:../loginpage.php?msg=nonco');
	exit();};

	include("../tools/bdd.php");

	$mdpc=md5($_POST['mdp']);
/*requête sql de vérification d'identifiants, à sécuriser*/
	$sql="SELECT COUNT(login) as 'ver' FROM PERSONNEL WHERE login='{$_POST['USER']}' AND mdp='$mdpc'";
	$req=$bd->prepare($sql);
	$req->execute();
	$rep=$req->fetchColumn();
	$req->closeCursor();

/*redirection vers la page de connexion car réponse de la base = 0*/
	if ($rep==0) {
		header('Location:../loginpage.php?msg=err');
		exit();
	};


/*redirection vers la page d'acceuil car réponse de la base = 1*/
	if ($rep==1) {
		
		/*requête pour tester si l'utilisateur est un admin*/
		$sql2="SELECT admin FROM PERSONNEL WHERE admin=1 AND login='{$_POST['USER']}'";
		$req2=$bd->prepare($sql2);
		$req2->execute();
		$rep2=$req2->fetchColumn();
		$req2->closeCursor();
		/*si oui ajoute une variable admin à la variable session*/
		if ($rep2==1) {
			$_SESSION['admin']="ok";
			$_SESSION['gestion']="chang";
		}

		/*requête pour tester si le mdp est valable*/
		elseif ($rep2!=1){
			$sql3="SELECT cpt_renouvellement FROM PERSONNEL WHERE login='{$_POST['USER']}' AND cpt_renouvellement=0";
			$req3=$bd->prepare($sql3);
			$req3->execute();
			$rep3=$req3->fetch();
			$req3->closeCursor();
			if ($rep3) {
				header('Location:../loginpage.php?msg=bloqué');
				exit();
			}
		};
		/*ajoute le login à la variable session*/
		$_SESSION['log']="{$_POST['USER']}";

		/*met à jour la bdd pour les logs de connexions*/
		$date=date('d/m/y \à H:m');
		$sql3="INSERT INTO LOGS (login, action, date) VALUES ('".$_SESSION['log']."','s\'est connecté.e','$date');";
		$req3=$bd->prepare($sql3);
		$req3->execute();
		$req3->closeCursor();
		/*redirige l'utilisateur vers la page d'accueil*/
		header('Location:../userpages/accueil.php');
	  	exit();
	};
?>