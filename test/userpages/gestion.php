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
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../tools/style.css">
	<title>Thales - Gestion</title>
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

<?php 
	if (count($nbMdpInf)>0) {
		echo '
			<div class="blocLogChange"><br>
			<span id="titleLogChange">Mise à jour mots de passe :</span><br><br>
			<ul class="loginChange">';
				foreach ($nbMdpInf as $key => $value) {
					echo "<li class='item'> - {$value['login']}</li>";}
		echo '</ul></div>';
	} 
?>
	<div class="baseContainer">
		<div class="updateContainer">
			<div id="titleContainer">
<?php 
	if ($_SESSION['gestion']=="chang") {
		include('../gestion/renouv.php');
	}
	elseif ($_SESSION['gestion']=="nouv") {
		include('../gestion/nouvuser.php');
	};
	echo "</div>";

	if (!empty($_GET)) {
		if ($_GET['msg']=='diff') {
			echo '<div id="diffMdp" class="errorMsg">Le mot de passe saisi ne correspond pas</div>';};
		if ($_GET['msg']=='confirm') {
			echo '<div id="confirm" class="decoMsg">Les modfications ont bien été effectuées</div>';};
		if ($_GET['msg']=='nonE') {
			echo '<div id="nonE" class="errorMsg">L\'utilisateur n\'existe pas</div>';};
		if ($_GET['msg']=='existe') {
			echo '<div id="existe" class="errorMsg">L\'utilisateur existe déjà dans la base</div>';};
		if ($_GET['msg']=='same') {
			echo '<div id="same" class="errorMsg">Le mot de passe est le même que le précédent</div>';};
		/*elseif($_GET['msg']=='weak'){
			echo '<div id="weakMdp" class="errorMsg"></div>';*/
	}
					
?>
			<!-- bouton de connexion -->		
			<input type="submit" name="edirSubmit" id="edirSubmit" value="Validez" class="btnSubmit" tabindex="6"/>
		</form>
		<div id="contMore">
			<nav>
				<br>
				<ul class="menu">
					<li class="menuItem">
        				<a href="../gestion/var.php?page=chang" class="linkMenu" style="font-size: 17px;color: black;">Gestion des mots de passe</a>
          			</li>
          			<li class="menuItem">
        				<a href="../gestion/var.php?page=nouv" class="linkMenu" style="font-size: 17px;color: black;">Nouvel utilisateur</a>
          			</li>
				</ul>

				<br>
			</nav>
		</div>
		</div>
	</div>


	<!-- prise de photos -->
		<div id="mainContainer" class="photo">
			<div id="authContainer">
			<div id="titleContainer">Supprimer un utilisateur</div>

			<!-- formulaire de suppression -->
				<form id="formContainer" method="POST" action="../gestion/maj.php" >
				<?php 
						$sql="SELECT login FROM PERSONNEL";
						$req=$bd->prepare($sql);
						$req->execute();
						$userNom=$req->fetchall();
						$req->closeCursor();


					if (!empty($_GET)) {
						if ($_GET['msg']=='suppr') {
							echo '<div class="decoMsg">l\'utilisateur a bien été supprimé</div>';};}
				?>
				<input id="actForm" name="actForm" type="hidden" value="suppr">

            	<label for='nomUser'>Utilisateur</label>

            	<!-- menu déroulant des tests existants -->
            	<select name='nomUser' id="nomUser" class="dropform" >
                	<?php foreach ($userNom as $key =>$value) {
                    	echo "<option value=".$value['login'].">".$value['login']."</option>\n";};?>
            	</select><br><br>
            	<!-- bouton d'envoi -->
    			<input type="submit" name="edirSubmit" id="edirSubmit" value="Supprimer" class="btnSubmit" onclick = "confirm(event,'!! ATTENTION !!\nVous allez supprimer un utilisateur');"/>
    		</form>
			<!-- div d'ajustement -->
			<div id="authMore"></div>
		</div>
	</div>
	<script type = "text/javascript">
            function confirm(event) {
               if(!confirm('!! ATTENTION !!\nVous allez supprimer un utilisateur') {
               	event.preventDefault(); }
            }
      </script> 
</body>

