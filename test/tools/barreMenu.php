<?php
	$sql="SELECT login FROM PERSONNEL WHERE cpt_renouvellement<6";
	$req=$bd->prepare($sql);
	$req->execute();
	$nbMdpInf=$req->fetchall();
	$req->closeCursor();

	if (count($nbMdpInf)>0){
		$notifMaj='notifMajR';
		$notif='notifActiv';
		$liste='ok';
	} else{
		$notifMaj='notifMajBlanck';
		$notif='notifDesact';
	}

	/* navigation */
	echo '<div id="bandeau">';
		
	if (!isset($_SESSION['admin'])) {
		echo '
			<nav role="navigation" class="navi">
        	<ul class="menu">
        		<li class="menuItem">
        			<a href="accueil.php" class="linkMenu">Accueil</a>
            	</li>';
			}
    /*partie du menu pour l'administrateur*/
    if (isset($_SESSION['admin'])) {
        echo '
			<nav role="navigation" aria-label="Menu principal" class="naviAdmin">
        		<ul class="menu">
        			<li class="menuItem">
        				<a href="accueil.php" class="linkMenu">Accueil</a>
            		</li>
        			<li class="menuItem">
        				<a href="logs.php" class="linkMenu">Logs</a>
            		</li>
               		<li class="menuItem">
        				<a href="gestion.php" id="'.$notifMaj.'" class="linkMenu">Gestion des utilisateurs<span class="'.$notif.'">!</span></a>
           			</li>';
        			};
        			/*photo et identifiants*/
    echo '
    	<li class="menuItem" >
            <a href="photo.php" class="linkMenu">Photographier</a>
        </li>';

    echo '
        <li class="menuItem" >
    		<a href="../connex/deco.php" class="linkMenu">Déconnexion</a>
    	</li>';

    /* infos utilisateur */
    echo '<li class="identifiant">';
       				
    echo "user : {$_SESSION['info'][0]} {$_SESSION['info'][1]}<br>user id : {$_SESSION['log']}";
        		
    echo "</li>
        		</ul>
			</nav>
		</div></div>";			
?>