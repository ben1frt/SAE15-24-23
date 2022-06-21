<?php include("../tools/bdd.php");
/*verification de l'authentification*/
	/*redirection vers la page de connexion et effac l'ensemble des données liés à la session en cours en cas */
	session_start();
	if (empty($_SESSION)) {
		header('Location:../loginpage.php?msg=nonco');
	  	exit();};
	if (empty($_POST)) {
		header('Location:../userpages/accueil.php');
		exit();};

/*début de la requête */
	$_SESSION['pathTest']=$_POST['nomTest'];
	$_SESSION['pathImg']=[];
	
	if (!isset($_POST['nomTest'])){
		$condit="dateImg='".$_POST['date']."'";
		$logs=$_POST['date'];

	}elseif (!isset($_POST['date'])) {
		$condit="nomTest='".$_POST['nomTest']."'";
		$logs=$_POST['nomTest'];

	}else{
		$condit="nomTest='".$_POST['nomTest']."' AND dateImg='".$_POST['date']."'";
		$logs=$_POST['nomTest'].' du '.$_POST['date'];
	}

	 
	$sql="SELECT nomImg FROM IMAGES WHERE {$condit}";
	/*echo"$sql";*/
	$req=$bd->prepare($sql);
	$req->execute();
	$recup=$req->fetchall();
	$req->closeCursor();

foreach ($recup as $key => $value) {
	$_SESSION['pathImg'][]=$value['nomImg'];
}

	
	/*met à jour la bdd pour les logs de recherche*/
	$date=date('d/m/y \à H:m');
	$sql3="INSERT INTO LOGS (login, action, date) VALUES ('".$_SESSION['log']."','a recherché les images du $logs','$date');";
	$req3=$bd->prepare($sql3);
	$req3->execute();
	$req3->closeCursor();

	/*redirection sur la page d'origine*/
header('Location:../userpages/accueil.php');
exit();
?>