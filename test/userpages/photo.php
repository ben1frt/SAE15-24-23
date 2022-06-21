<?php include("../tools/bdd.php");
/*verification de l'authentification*/
	/*redirection vers la page de connexion*/
	session_start();
	if (empty($_SESSION)) {
		header('Location:../loginpage.php?msg=nonco');
	  	exit();};
	 if (!isset($_SESSION['info'])) {
	 	/*requête pour récupérer le nom et le prénom de l'utilisateur*/
	$sql="SELECT nom, prenom FROM PERSONNEL WHERE login='{$_SESSION['log']}'";
	$req=$bd->prepare($sql);
	$req->execute();
	$_SESSION['info']=$req->fetch();
	$req->closeCursor();
	 };

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
    <link rel="stylesheet" href="../tools/style.css">
	<title>Thales - Photographier</title>
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

</div></header>
		<div id="mainContainer" class="photo">
		<div id="authContainer">
		<div id="titleContainer">Photographier</div>


			<form id="formContainer" method="POST" action="../prisePhoto/photo.php" >
				<?php 
					if (!empty($_GET)) {
						if ($_GET['msg']=='pasTest') {
							echo '<div class="errorMsg">aucun test n\'a été sélectionné</div>';};}
				?>
				
            	<label for='nomTest'>Tests existants</label>

            	<select name='nomTest' id="nomTest" class="dropform">
                	<?php foreach ($testNom as $key =>$value) {
                    	echo "<option value=".$value['nomTest'].">".$value['nomTest']."</option>\n";};?>
            	</select><br><br>
    			<input type="submit" name="edirSubmit" id="edirSubmit" value="Photographier" class="btnSubmit"/>
    		</form>

    		<br><br><div id="separ"></div><br>
			
			<form id="formContainer" action="../prisePhoto/photo.php" METHOD="POST">
				<label for="nomTest">Nouveau test</label>

				<input id="nomTest" name="nomTest" type="text" placeholder="Entrez le nom du test" class="field" autocomplete="off" spellcheck="false" autofocus="autofocus" size="35" />	

				<input type="submit" name="edirSubmit" id="edirSubmit" value="Photographier" class="btnSubmit"/>
			</form>
			<div id="authMore"></div>
		</div>
	</div>
</body>
</html>