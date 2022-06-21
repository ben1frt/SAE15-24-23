<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="StyleConnexion.css">
    <title>Page de Connexion</title>
</head>
<body>
    <ul>
        <li><img src="Thales-logo.png" alt="Logo Thales" style="height: 10%; width: 15%; margin-left: 5%;"></li>
        <li><a href="Accueil.html"> Accueil</li> </a>
        <li><a href="PagedeConnexion.html"> Connexion</li> </a>
    </ul>
    <ul>
        <li><select name="projet" id="projet"></select>
            <option value="">--Please choose an option--</option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
        </li>
        <li><select name="projet" id="projet"></select>
            <option value="">--Please choose an option--</option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
        </li>
        <li><select name="date" id="date"></select>
            <option value="">--Please choose an option--</option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
    </ul>


<form method='post' action="log.php"></form>
<p>
    <label for="Login">Login</label>
    <input type="text" name="login" id="login" autofocus required />
    <br>
    <label for="Mot de passe">Mot de passe</label>
    <input type="text" name="mdp" id="mdp">

</p>
</body>
</html>