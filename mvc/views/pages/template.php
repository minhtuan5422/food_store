<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
</head>

<body>
    <?php require_once "./mvc/views/partials/header.php"?>
    <?php $content; ?>
    <?php require_once "./mvc/views/partials/header.php"?>
</body>
</html>