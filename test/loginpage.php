<?php include("tools/bdd.php");

/*permet d'effacer les précédentes données de session*/
	session_start();
	/*réinitialise le tableau $_SESSION*/
	$_SESSION=array();
	    /*supprime d'éventuels COOKIES*/
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]);
        }
	/*Supprime la session*/
	session_destroy();


	/*requête pour les noms des tests*/
    $sql="SELECT DISTINCT nomTest FROM IMAGES";
    $req=$bd->prepare($sql);
    $req->execute();
    $testNom=$req->fetchall();
    $req->closeCursor();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tools/style.css">
	<title>Thales - Authentification</title>
</head>

<body>
	
	<!-- bloc de connexion -->
	<div id="mainContainer">
		<div id="authContainer">
			<?php include("tools/logo.php");?>
				Authentification
		</div>
		
		<!-- formulaire de connexion -->
		<form id="formContainer" action="connex/session.php" METHOD="POST">
			<!-- case login -->
			<label for="identifiant" id="identifiant">Identifiant</label>

			<input id="USER" type="text" name="USER" placeholder="Entrez votre identifiant" class="field" autocomplete="off" tabindex="1" spellcheck="false" autofocus="autofocus" size="35" />
			
			<div style="clear:both;"></div>			
			
			<!-- case mdp -->
			<label for="mdp" alt="" title="" id="password">Mot de passe</label>
			<input id="mdp" type="password" name="mdp" placeholder="Entrez votre mot de passe" class="field" tabindex="2" title="Entrez votre mot de passe" autocomplete="off"/>

			<!-- messages relatifs à l'état de connexion -->
			<?php
				if (!empty($_GET)) {
					if ($_GET['msg']=='err') {
						echo "<div class='errorMsg'>Le mot de passe saisi est incorrect</div>";}
					elseif ($_GET['msg']=='nonco') {
						echo "<div class='errorMsg'>Vous n'êtes pas connecté</div>";}
					elseif ($_GET['msg']=='bloqué') {
						echo "<div class='errorMsg'>Votre compte est bloqué, veuillez contacter votre administrateur</div>";}
					elseif ($_GET['msg']=='bloqueAttente') {
						echo "<div class='errorMsg'>Vous avez dépassé le nombre de tentative maximal, votre compte est bloqué, veuillez attendre 1 heure</div>";}
					elseif ($_GET['msg']=='deco') {
						echo "<div class='decoMsg'>Vous vous êtes correctement déconnecté</div>";}
					elseif ($_GET['msg']=='droits') {
						echo "<div class='errorMsg'>Vous n'avez pas les droits nécessaires,<br> veuillez vous connecter en tant qu'administrateur</div>";}}?>

			<!-- bouton de connexion -->		
			<input type="submit" name="edirSubmit" id="edirSubmit" value="Connexion" class="btnSubmit" tabindex="3"/>
		</form>
			<!-- div d'ajustement -->
			<div id="authMore"></div>
		</div>




<!-- prise de photos -->
		<div id="mainContainer" class="photo">
			<div id="authContainer">
			<div id="titleContainer">Photographier</div>

			<!-- formulaire pour les tests existants -->
				<form id="formContainer" method="POST" action="prisePhoto/photoNonCo.php" >
				<?php 
					if (!empty($_GET)) {
						if ($_GET['msg']=='pasTest') {
							echo '<div class="errorMsg">aucun test n\'a été sélectionné</div>';};}
				?>
				
            	<label for='nomTest'>Tests existants</label>

            	<!-- menu déroulant des tests existants -->
            	<select name='nomTest' id="nomTest" class="dropform">
                	<?php foreach ($testNom as $key =>$value) {
                    	echo "<option value=".$value['nomTest'].">".$value['nomTest']."</option>\n";};?>
            	</select><br><br>
            	<!-- bouton d'envoi -->
    			<input type="submit" name="edirSubmit" id="edirSubmit" value="Photographier" class="btnSubmit"/>
    		</form>

    		<br><br><div id="separ"></div><br>
			
			<!-- formulaire pour les nouveaux tests -->
			<form id="formContainer" action="prisePhoto/photoNonCo.php" METHOD="POST">
				<label for="nomTest">Nouveau test</label>

				<!-- espace pour entrer le nom des nouveaux tests -->
				<input id="nomTest" name="nomTest" type="text" placeholder="Entrez le nom du test" class="field" autocomplete="off" spellcheck="false" autofocus="autofocus" size="35" />

				<!-- bouton d'envoi -->
				<input type="submit" name="edirSubmit" id="edirSubmit" value="Photographier" class="btnSubmit"/>
			</form>
			<!-- div d'ajustement -->
			<div id="authMore"></div>
		</div>
	</div>
	</body>
</html>