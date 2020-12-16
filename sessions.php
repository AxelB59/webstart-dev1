<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once('db.php');

/*
 * Pour utiliser les sessions il faut avant d'envoyer
 * le moindre paquet en réponse lancer la fonction
 * session_start()
 */
/*
 * PHP va sauvegarder de son côté toutes les informations de session
 * Le client ne va conserver qu'un cookie pour identifier la bonne session
 */
session_start();
/*
 * La première fois la session n'existe pas du tout
 * session_start va créer un cookie et le retourner
 * au client (le navigateur)
 * Ce cookie est envoyé dans la partie header
 * de l'echange http
 * exemple
 * Set-Cookie: PHPSESSID=h9q3ei1gv2klu9u3n6eimo4t3u; path=/
 */
/*
 * Lors d'un autre appel du même client
 * il donne son cookie au serveur web
 * par exemple :
 * Cookie: PHPSESSID=h9q3ei1gv2klu9u3n6eimo4t3u
 * Grace à ce cookie PHPest capable de récupérer les valeurs
 * stockées pour CE client lors des appels précédents
 */

/*
 * A partir de maintenant la variable super globale
 * $_SESSION est utilisable avec toutes les données
 * qui auront été sauvegardées dans notre code
 */

// unset($_SESSION["id"]);

if (isset($_SESSION["id"])) {
    echo "<p>Bienvenue utilisateur n°" . $_SESSION["id"] . "<p>";
    echo <<<EOT
        <form action="login.php" method="post">
            <input type="hidden" name="action" value="logout">
            <button type="submit">Se déconnecter</button>
        </form>
    EOT;

} else {
    echo <<<EOT
    <form action="login.php" method="post">
        <input type="hidden" name="action" value="login">
        <div>
            <label for="username">Nom d'utilisateur :</label>
            <input type="text" name="username" id="username">
        </div>
        <div>
            <label for="password">Mot de passe :</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <button type="submit">Se connecter</button>
        </div>
    </form>
    EOT;
}

?>

