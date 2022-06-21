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
	<title>Thales - Accueil</title>
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

</div>


<!-- formulaire du choix des photos -->
<div class="divFormAffich">
<form method="POST" action="../affichage/affich.php" >
    <ul class="menu" id="formAffich">
        <li>
            <label for='nomTest'>Nom test </label>
        </li>
        <li>
            <select name='nomTest' id="nomTest" class="dropform">
                <?php foreach ($testNom as $key =>$value) {
                    echo "<option value=".$value['nomTest'].">".$value['nomTest']."</option>\n";};?>
            </select>
        </li>
        <li>
            <input type="submit" name="edirSubmit" id="edirSubmit" value="Rechercher" class="btnSubmit"/>
        </li>
    </ul>
</form>
</div>

<!-- Affichage des image -->

<?php 
    
    if (isset($_SESSION['pathImg'])) {
        /*Nom du test sélectionné*/
        echo '<div id="titleTest">'.$_SESSION['pathTest'].'</div>';
        /*grosses images*/
        if(!empty($_GET['img'])){

                $sql="SELECT dateImg,heure FROM IMAGES WHERE nomTest='".$_SESSION['pathTest']."' AND nomImg='".$_GET["img"]."'";
                $req=$bd->prepare($sql);
                $req->execute();
                $dateImg=$req->fetchall();
                $req->closeCursor();

            echo '<div class="big-img"><img src="./Images/'.$_SESSION['pathTest']."/".$_GET['img'].'" alt="Images" />';
                echo '<input type=button onclick=window.location.href="accueil.php"; value=X />';
                echo '<ul>';
                echo '<li>Nom de la photo : '.$_GET["img"].'</li><br>';
                echo '<li>Prise le '.$dateImg[0]['dateImg'].' à '.$dateImg[0]['heure'].'</li>';
                echo '</ul></div>';
            }

    /*galerie d'images*/
        $tableau = array();
        $dossier = opendir('Images/'.$_SESSION['pathTest']);
        /*récupération des images*/
        while ($fichier = readdir($dossier)) {
            if (array_search($fichier,$_SESSION['pathImg'])||array_search($fichier,$_SESSION['pathImg'])===0) {
                $tableau[] = $fichier;}
        }   
          
        closedir($dossier);
        $nbpics = count($tableau);
        $nbcol=4;

        /*affichage utilisateur normal*/
        if (!isset($_SESSION['admin'])) {
            if ($nbpics != 0) {
                echo '<table>';
                for ($i=0; $i<$nbpics; $i++){
                    if($i%$nbcol==0) echo '<tr>';
                    echo '
                        <td class="miniature"><a href="accueil.php?img='.$tableau[$i].'"><img src="./Images/'.$_SESSION['pathTest']."/".$tableau[$i].'" alt="Image" /></a>
                        <br><label class="labelImg" for="'.$tableau[$i].'">'.$tableau[$i].'</label></td>';
                        if($i%$nbcol==($nbcol-1)) echo '</tr>';
                }
                echo '</table>';
            }
        }
        /*affichage administrateur*/
        elseif (isset($_SESSION['admin'])) {
            echo'<form method="POST" action="../affichage/suppr.php">';

            if ($nbpics != 0) {
                echo '<table>';
                for ($i=0; $i<$nbpics; $i++){
                    if($i%$nbcol==0) echo '<tr>';
                    echo '
                    <td class="miniature"><a href="accueil.php?img='.$tableau[$i].'"><img src="./Images/'.$_SESSION['pathTest']."/".$tableau[$i].'" alt="Image" /></a>

                    <br><input type="checkbox" id="'.$tableau[$i].'" name="'.$tableau[$i].'" value="'.$tableau[$i].'"><label class="labelImg" for="'.$tableau[$i].'">'.$tableau[$i].'</label></td>';
                        if($i%$nbcol==($nbcol-1)) echo '</tr>';
                }
                echo '</table>';
            }
            echo '
                    <input type="submit" name="suppr" id="suppr" value="Supprimer" class="btnSubmit"/>
                </form>';
        }
    else echo 'Aucune image à afficher';}
?>
</body>