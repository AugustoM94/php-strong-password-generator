<?php
function generatePassword() {
    // array disponibili
    $symbols = '!?&%$><^+-*/(){}@#_-=';
    $letters = 'abcdefghijklmnopqrstuvwxyz';
    $upLetters = strtoupper($letters);
    $numbers = '0123456789';

    // Inizializzazione della password vuota
    $password = '';

    // Verifica se la lunghezza della password è stata fornita attraverso GET
    if (isset($_GET['passwordLength'])) {
        $passwordLength = $_GET['passwordLength'];

        // Ciclo per generare la password fino alla lunghezza inserita in input
        while (strlen($password) < $passwordLength) {
            // Combinazione di tutti i caratteri disponibili
            $availableChars = $symbols . $letters . $upLetters . $numbers;

            // Estrazione casuale di un carattere
            $newChar = $availableChars[rand(0, strlen($availableChars) - 1)];

            // Aggiungere il nuovo carattere solo se non è già presente nella password
            if (strpos($password, $newChar) === false) {
                $password .= $newChar;
            }
        }
    }

    // Restituzione della password generata
    return $password;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP Strong Password Generator</title>
</head>
<body>
<div class="container d-flex align-items-center justify-content-center vh-100">
    <main class="text-center">
        <h1 class="mb-4">Strong Password Generator</h1>
                <h3>Genera una password sicura</h3>
        <form action="index.php" method="GET">
            <label for="passwordLength">Lunghezza della password:</label>
            <input type="number" name="passwordLength" id="passwordLength" min="8" max="25" required>
            <button type="submit" class="btn btn-primary">Genera Password</button>
        </form>
        <?php
        // Controlla se è stata generata una password
        if (isset($_GET['passwordLength'])) {
            $generatedPassword = generatePassword();
            echo "<p class='mt-3'>La tua password generata è: $generatedPassword</p>";
        }
        ?>
    </main>
</div>
</body>
</html>
