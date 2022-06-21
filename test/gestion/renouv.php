<?php
	echo '
				Renouvellement de mot passe
			</div>
			<form id="formContainer" name="formContainer" action="../gestion/maj.php" METHOD="POST">

				<input id="actForm" name="actForm" type="hidden" value="change">

			<!-- case login -->
				<label for="identifiant" id="identifiant">Identifiant de l\'utilisateur</label>

				<input id="USER" type="text" name="USER" placeholder="Entrez l\'identifiant de l\'utilisateur" class="field" autocomplete="off" tabindex="1" spellcheck="false" autofocus="autofocus" size="35" />

				<div style="clear:both;"></div>

				<!-- case mdp -->

				<label for="Mdp" id="Mdp">Nouveau mot de passe</label>

				<div class="verifField">
				<input id="newMdp" type="password" name="newMdp" placeholder="Entrez le nouveau mot de passe" class="field" autocomplete="off" tabindex="2" size="35" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"/>
				</div>

				<div style="clear:both;"></div>			
			
				<!-- case mdp -->
				<label for="mdp" title="" id="mdp">Confirmation du nouveau mot de passe</label>

				<div class="verifField">
				<input id="confirmMdp" disable type="password" name="confirmMdp" placeholder="Confirmez le nouveau mot de passe" class="field" tabindex="3" autocomplete="off" onkeyup="validate();"/>';
?>