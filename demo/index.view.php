<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Demo</title>
  </head>
  <body>
    <h1>Hello <?= $name; ?></h1>
    <?php foreach ($books1 as $book) : ?>
                <li><?= $book["name"] ?></li>
    <?php endforeach; ?>

  </body>
</html>