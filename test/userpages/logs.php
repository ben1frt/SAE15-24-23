<?php include("../tools/bdd.php");
/*verification de l'authentification*/
	/*redirection vers la page de connexion*/
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
	if (!isset($_SESSION['userListe'])) {
		$sql="SELECT login FROM PERSONNEL WHERE admin=0";
		$req=$bd->prepare($sql);
		$req->execute();
		$_SESSION['userListe']=$req->fetchall();
		$req->closeCursor();

	 	$sql="SELECT login FROM PERSONNEL WHERE admin=1";
		$req=$bd->prepare($sql);
		$req->execute();
		$_SESSION['adminListe']=$req->fetchall();
		$req->closeCursor();

	 	};
	

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../tools/style.css">
	<title>Thales - Logs</title>
</head>


<body>
	<!-- bandeau de navigation -->
<header role="banner" class="header">
	<div class="toolbar">
		<div class="wrapper">
			<!-- logo -->
			<div id="logoBar">
				<?php include("../tools/logo.php");?>
				</div>
			</div>

<?php include("../tools/barreMenu.php") ?>
</header>

<!-- Bloc liste utilisateur -->
	<div id="blocLogId" >
		<nav><?php
			echo "<ul>
				<li id='titleLogChange'>Utlisateurs :<ul>";
					foreach ($_SESSION['userListe'] as $key =>$value) {
						echo "<li><a href='logs.php?user={$value['login']}''>{$value['login']}</a></li>";};
			echo "</ul>

				</li><li id='titleLogChange'>Administrateurs :<ul>";
					foreach ($_SESSION['adminListe'] as $value) {
						echo "<li><a href='logs.php?user={$value['login']}''>{$value['login']}</a></li>";};
			echo "</ul></li></ul>";?>
		</nav>
	</div>
<!-- panneau d'affichage -->

	<div class="logsContainer">
		<div id="titleContainer">Journeaux des utilisateurs</div>
			<?php
				if (!empty($_GET)) {
					
					$sql1="SELECT prenom, nom FROM PERSONNEL WHERE login='{$_GET['user']}'";
					$req1=$bd->prepare($sql1);
					$req1->execute();
					$rep1=$req1->fetchall();
					$req1->closeCursor();
					
					echo "<div id='nomUserLog'>Logs de ".$rep1[0][0]." ".$rep1[0][1]."</div>";
					
					$sql="SELECT action,date FROM LOGS WHERE login='{$_GET['user']}' ORDER BY action DESC";
					$req=$bd->prepare($sql);
					$req->execute();
					$rep=$req->fetchall();
					$req->closeCursor();
					
					/*echo "<pre>".print_r($rep1)."</pre>";*/
					/*logs de connexions*/
					echo "<br><div class='divLog'>Connexions : </div><br><br>";
					foreach ($rep as $key => $value) {
						if(explode(" ", $value['action'])[1]=="connecté.e"){
							echo "<span>".$_GET['user']." ".$value['action']." ".$value['date']."</span><br><br>";
						}
					}
					echo "<br><div class='divLog'>Recherches : </div><br><br>";
					foreach ($rep as $key => $value) {
						if(explode(" ", $value['action'])[1]=="recherché"){
							echo "<span>".$_GET['user']." ".$value['action']." ".$value['date']."</span><br><br>";
						}
					}
					echo "<br><div class='divLog'>Suppression : </div><br><br>";
					foreach ($rep as $key => $value) {
						if(explode(" ", $value['action'])[1]=="supprimé"){
							echo "<span>".$_GET['user']." ".$value['action']." ".$value['date']."</span><br><br>";
						}
					}
					echo "<br><div class='divLog'>Gestion des utilisateurs : </div><br><br>";
					foreach ($rep as $key => $value) {
						if(explode(" ", $value['action'])[1]=="changé" || explode(" ", $value['action'])[1]=="changé"){
							echo "<span>".$_GET['user']." ".$value['action']." ".$value['date']."</span><br><br>";
						}
					}
				};
			?>
	</div>
</body>