<?php

if(!isset($_SESSION)) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="protect.css">
   
</head>
<body>
    <form>
<?php
if(!isset($_SESSION['id'])) {
    die("<p>Você não pode acessar esta página porque não está logado.</P><p><a href=\"index.php\">Entrar</a></p>");
}


?>
</form>
</body>
</html>

