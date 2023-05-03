<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>PHP Badwords</title>
</head>
<body>
    <form action="./badword.php" class="d-flex flex-column align-items-center text-center">
        <h1 class="text-center fs-1 mt-5">PHP Badwords</h1>
        <label for="userText" class="form-label mt-5">Inserisci la parola da censurare</label>
        <input type="text" name="userText" id="userText" class="w-50">
        <label for="Text" class="form-label mt-5">Inserisci un testo</label>
        <textarea name="Text" id="Text" cols="30" rows="10" class="w-50"></textarea>
        <input class="btn mt-3 bg-primary" type="submit" value="Invia">
    </form>



</body>
</html>