<?php

$file = './db/meta_description.txt';

if ($description = @$_POST['description']) {
  file_put_contents($file, $description);
}

$description = file_get_contents($file);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Meta Description</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
  <form method="post">
    <textarea class="form-control" name="description"><?= $description ?></textarea>
    <button class="btn btn-success">Salvar</button>
  </form>
</body>
</html>
