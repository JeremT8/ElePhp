<?php

/**
 *Définition d'un message flash
 *
 * @param string $message
 * @return void
 */
function addFlash(string $message):void {
    $_SESSION["messageFlash"] = $message;
}

/**
 * Récupération du message
 * et suppréssion de celui-ci dans la session
 *
 * @return string
 */
function getFlash():string {
    $message = $_SESSION["messageFlash"];
    unset($_SESSION["messageFlash"]);
    return $message;
}

/**
 * Test de l'existence d'un message flash
 *
 * @return boolean
 */
function hasFlash(): bool {
    return isset($_SESSION["messageFlash"]);
}

?>