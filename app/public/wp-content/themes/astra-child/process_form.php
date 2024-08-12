<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Valider que les quantités ne sont pas négatives
    $fraise = max(0, intval($_POST['spinbox_fraise']));
    $pamplemousse = max(0, intval($_POST['spinbox_pamplemousse']));
    $framboise = max(0, intval($_POST['spinbox_framboise']));
    $citron = max(0, intval($_POST['spinbox_citron']));

    // Construire le message avec les quantités validées
    $to = "planty.drinks@gmail.com";
    $subject = "Planty Commande";
    $from = "From: " . $_POST['nom'] . " " . $_POST['prenom'] . " <" . $_POST['email'] . ">";

    $message = "From: " . $_POST['nom'] . " " . $_POST['prenom'] . " <" . $_POST['email'] . ">\n\n";
    $message .= "Commande:\n";
    $message .= $fraise . " Fraise\n";
    $message .= $pamplemousse . " Pamplemousse\n";
    $message .= $framboise . " Framboise\n";
    $message .= $citron . " Citron\n\n";
    $message .= "Adresse de livraison:\n";
    $message .= $_POST['adresse'] . "\n";
    $message .= $_POST['codepostal'] . " " . $_POST['ville'] . "\n\n";
    $message .= "--\nThis is a notification that a contact form was submitted on your website.";

    $headers = "From: " . $_POST['nom'] . " " . $_POST['prenom'] . " <" . $_POST['email'] . ">\r\n";
    $headers .= "Reply-To: " . $_POST['email'] . "\r\n";

    // Envoyer l'email
    if (mail($to, $subject, $message, $headers)) {
        echo "Merci, votre commande a été envoyée.";
    } else {
        echo "Désolé, il y a eu une erreur lors de l'envoi de votre commande.";
    }
}
?>