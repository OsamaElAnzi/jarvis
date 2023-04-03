<?php

	$host = 'localhost';
	$dbname = 'contactInfo';
	$username = 'bit_academy';
	$password = '';

	$dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;
	$pdo = new PDO($dsn, $username, $password);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Bericht</h1>
    <form action="Contact.php" methode="GET">
        <label>Naam</label>
        <input type="text" name="naam"> <br>
        <label>TelefoonNummer</label>
        <input type="tel" name="telefoonnummer"> <br>
        <label>email</label>
        <input type="email" name="email"> <br>
        <label>Bericht</label>
        <input type="text" name="informatie">
        <button type="submit" name="versturen">Toevengen</button>
    </form>
</body>
</html>
<?php
if (isset($_GET['versturen'])) {
    $naam = $_GET['naam'];
    $telefoonnummer = $_GET['telefoonnummer'];
    $email = $_GET['email'];
    $informatie = $_GET['informatie'];
    $query = "INSERTEN INTO bericht (name, telefoonnummer, email, informatie)
                VALUES (:naam, :telefoonnummer, :email, :informatie )";
    $run = $pdo->prepare($query);
    $exec = $run->execute(array(":naam" => $naam, ":telefoonnummer" => $telefoonnummer, ":email" => $email, ":informatie" => $informatie))
}
if ($exec) {
    header('location: contact.html');
} else {
    exit(0);
}
?>

