<?php

// Les utilisateurs
$users = [
    1 => [
        "username" => "jodeq",
        "password" => "pass1"
    ],
    2 => [
        "username" => "user2",
        "password" => "pass2"
    ]
];

/*
 * Créer une fonction qui premet de retrouver l'id d'un utilisateur
 * en passant le username et le password en paramètre
 * et faux si aucun utilisateur n'est trouvé
 */
function getUserId($username, $password) {
    global $users;

    foreach($users as $user_id => $user) {
        if ($user["username"] == $username && $user["password"] == $password)
            return $user_id;
    }

    return false;
}
