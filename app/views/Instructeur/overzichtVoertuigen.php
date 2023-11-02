<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,1,200" />
    <link rel="stylesheet" href="<?= URLROOT; ?>/css/style.css">
    <title>Overzicht instructeur</title>
</head>

<body>
    <div>
        <h1><?= $data['title']; ?></h1>
        <p>
            Naam: <?= $data['personData']->Voornaam . " " . $data['personData']->Tussenvoegsel . " " . $data['personData']->Achternaam ?> <br>
            Datum in dienst: <?= $data['personData']->DatumInDienst; ?> <br>
            Aantal sterren: <?= $data['personData']->AantalSterren ?>
        </p>
        <div>
            <p><?= $data['message'] ?></p>
            <a href="<?= URLROOT . '/instructeur/beschikbarenVoertuigen/' . $data['personData']->Id ?>">Voeg voertuig toe</a>
        </div>

        <table>
            <thead>
                <th>Voertuig Type</th>
                <th>Type</th>
                <th>Kenteken</th>
                <th>Bouwjaar</th>
                <th>Brandstof</th>
                <th>Rijbewijs</th>
                <th>Edit</th>
                <th>Delete</th>
            </thead>
            <tbody>
                <?= $data['tableRows'] ?>
            </tbody>
        </table>
    </div>
    <a href="<?= URLROOT . "/instructeur/overzichtInstructeur" ?>">Back</a>
</body>

</html>