<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Error</title>
</head>
<body>
    <h1><?= esc($title ?? 'Error') ?></h1>
    <p><?= esc($message ?? 'An error occurred') ?></p>
</body>
</html>
