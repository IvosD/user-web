<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST["name"]);
  $email = htmlspecialchars($_POST["email"]);
  $message = htmlspecialchars($_POST["message"]);

  $to = "info@ivodostal.cz"; // <-- Zde zadej sv�j e-mail
  $subject = "Nov� zpr�va z webu od $name";
  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";
  $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

  $body = "Jm�no: $name\nE-mail: $email\n\nZpr�va:\n$message";

  if (mail($to, $subject, $body, $headers)) {
    echo "Zpr�va byla �sp�n� odesl�na.";
  } else {
    echo "Chyba p�i odes�l�n� zpr�vy.";
  }
} else {
  echo "Neplatn� po�adavek.";
}
?>
