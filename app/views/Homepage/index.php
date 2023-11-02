<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?= URLROOT; ?>/css/style.css">
<title>Home screen</title>
</head>

<body>
    <h1><?= $data['title']; ?></h1>
        <a class="button" href="<?= URLROOT; ?>/Instructeur/overzichtinstructeur">Instructeurs in dienst</a> 
        <a class="button" href="<?= URLROOT; ?>/Examens/overzichtexamens">Examinatoren in dienst</a> 
        <a class="button" href="<?= URLROOT; ?>/Voertuig/overzichtVoertuigen">Alle voertuigen</a> 
    </body>
</html>
