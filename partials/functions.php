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