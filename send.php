<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST["name"]);
  $email = htmlspecialchars($_POST["email"]);
  $message = htmlspecialchars($_POST["message"]);

  $to = "info@ivodostal.cz"; // <-- Zde zadej svùj e-mail
  $subject = "Nová zpráva z webu od $name";
  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";
  $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

  $body = "Jméno: $name\nE-mail: $email\n\nZpráva:\n$message";

  if (mail($to, $subject, $body, $headers)) {
    echo "Zpráva byla úspìšnì odeslána.";
  } else {
    echo "Chyba pøi odesílání zprávy.";
  }
} else {
  echo "Neplatný požadavek.";
}
?>
