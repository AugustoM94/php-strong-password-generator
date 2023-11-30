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
    <main class="container text-center">
            <h1>Strong Password Generate</h1>
                <form action="index.php" method="GET">
                        <label for="passwordLength"> Lunghezza della password:</label>
                        <input type="number" name="passwordLength" id="passwordLength" min="8" max="25" required>
                        <button type="submit">Genera Password</button>
                </form>

    </main>

</body>
</html>