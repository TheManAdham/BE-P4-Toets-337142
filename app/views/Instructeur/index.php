<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= URLROOT; ?>/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Instructeurs</title>
</head>
<body>
    <u><?= $data['title']; ?></u>

    <h4>Aantal Instructeurs: <?= $data ['aantalInstructeurs']; ?></h4>
    
    <table border='1'>
        <thead>
            <th>Voornaam</th>
            <th>Tussenvoegsel</th>
            <th>Achternaam</th>
            <th>Mobiel</th>
            <th>Datum in dienst</th>
            <th>Aantal sterren</th>
            <th>Voertuigen</th>
        </thead>
        <tbody>
            <?php echo $data ['tableRows'];?>
        </tbody>
    </table>
</body>
</html>


