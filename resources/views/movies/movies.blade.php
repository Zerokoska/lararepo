<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>My movies</h1>
<ul>
        <?php foreach($movies as $movie) : ?>
            <?= $movie->name; ?>
        <ul>
            <li><?= $movie->movieType->name ?></li>
        </ul>
        <?php endforeach ?>
    </ul>
</body>
</html>