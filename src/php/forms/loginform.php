<?php
require_once './src/php/classes/Authentication.php';

$formData = $_POST;

$auth = new Authentication();
if ($auth->login($formData)) {
    // Connexion réussie

    Header('Location: ../../../');
} else {
    // Connexion échouée
    Header('Location: ../../../connexion.php?error=true');
}
