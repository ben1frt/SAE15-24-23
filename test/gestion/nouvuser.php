<?php
	echo '
				Nouveau compte utilisateur
			</div>
			<form id="formContainer" name="formContainer" action="../gestion/maj.php" METHOD="POST">

				<input id="actForm" name="actForm" type="hidden" value="new">

				<label for="nomUser" id="nomUser">Nom </label>

				<input id="nom" type="text" name="nom" placeholder="Entrez le nom de l\'utilisateur" class="field" autocomplete="off" tabindex="1" spellcheck="false" autofocus="autofocus" size="35" />

				<label for="prenomUser" id="prenomUser">Prénom </label>

				<input id="prenom" type="text" name="prenom" placeholder="Entrez le prénom de l\'utilisateur" class="field" autocomplete="off" tabindex="2" spellcheck="false" autofocus="autofocus" size="35" />


			<!-- case login -->
				<label for="identifiant" id="identifiant">Identifiant</label>

				<input id="USER" type="text" name="USER" placeholder="Entrez l\'identifiant de l\'utilisateur" class="field" autocomplete="off" tabindex="3" spellcheck="false" autofocus="autofocus" size="35" />

				<label for="admin">Statut </label>
				<select id="admin" name="admin" class="dropform" style="background-color: white;">
					<option value=0>opérateur</option>
					<option value=1>admin</option>
				</select>

				<div style="clear:both;"></div>

				<!-- case mdp -->

				<label for="Mdp" id="Mdp">Mot de passe</label>

				<div class="verifField">
				<input id="newMdp" type="password" name="newMdp" placeholder="Entrez le mot de passe" class="field" autocomplete="off" tabindex="4" size="35" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"/>
				</div>

				<div style="clear:both;"></div>			
			
				<!-- case mdp -->
				<label for="mdp" title="" id="mdp">Confirmation du mot de passe</label>

				<div class="verifField">
				<input id="confirmMdp" disable type="password" name="confirmMdp" placeholder="Confirmez le mot de passe" class="field" tabindex="5" autocomplete="off" onkeyup="validate();"/>';
	?>