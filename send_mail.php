<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Anti-spam "honeypot"
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

    // Adresse du destinataire (ton email de réception)
    $to = "contact@sekplon.com";

    // Sujet de l'email
    $mail_subject = "Portfolio - $subject";

    // Corps du message
    $body = "Nom : $name\nEmail : $email\n\nMessage :\n$message";

    // Adresse expéditrice (doit exister et être sur ton domaine !)
    $from_email = "contact@sekplon.com";

    // En-têtes email
    $headers = [];
    $headers[] = "From: Portfolio <$from_email>";
    $headers[] = "Reply-To: $email";
    $headers[] = "Return-Path: $from_email";
    $headers[] = "MIME-Version: 1.0";
    $headers[] = "Content-Type: text/plain; charset=UTF-8";
    $headers_str = implode("\r\n", $headers);

    // Envoi de l'email
    if (mail($to, $mail_subject, $body, $headers_str, "-f $from_email")) {
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
