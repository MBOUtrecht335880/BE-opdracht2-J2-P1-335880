<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,1,200" />
<link rel="stylesheet" href="<?= URLROOT; ?>/css/style.css">
<title>Overzicht Examens</title>
</head>
<body>
    <h1><?= $data['title']; ?></h1>
    <p>Aantal examens <?= $data['amount'] ?></p>
    <table>
        <thead>
            <th>Naam examinator</th>
            <th>Datum examen</th>
            <th>Rijbewijs categorie</th>
            <th>Rijschool</th>
            <th>Stad</th>
            <th>Uitslag</th>
        </thead>
            <tbody>
                <?= $data['rows']; ?>
         </tbody>
    </table>
    <a href="<?= URLROOT . "/Homepage/" ?>" class="button">Back</a><br>
</body>
</html>



