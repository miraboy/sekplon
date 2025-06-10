<?php
// filepath: c:\xampp\htdocs\portfolio\send_mail.php

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Honeypot anti-spam
    if (!empty($_POST['website'])) {
        echo json_encode([
            'success' => false,
            'message' => "Spam détecté."
        ]);
        exit;
    }

    $name    = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email   = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
    $subject = htmlspecialchars(trim($_POST['subject'] ?? ''));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

    if (!$name || !$email || !$subject || !$message) {
        echo json_encode([
            'success' => false,
            'message' => "Veuillez remplir tous les champs."
        ]);
        exit;
    }

    $to = "mirabelbarryl@gmail.com";
    $mail_subject = "Portfolio - $subject";
    $body = "Nom: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $name <$email>\r\nReply-To: $email";

    if (mail($to, $mail_subject, $body, $headers)) {
        echo json_encode([
            'success' => true,
            'message' => "Votre message a bien été envoyé. Merci !"
        ]);
    } else {
        echo json_encode([
            'success' => false,
            'message' => "Erreur lors de l'envoi du message. Veuillez réessayer plus tard."
        ]);
    }
} else {
    echo json_encode([
        'success' => false,
        'message' => "Méthode non autorisée."
    ]);
}