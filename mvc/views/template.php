<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <?php require_once 'partials/styles.php' ?>
</head>

<body>
    <?php require_once "./mvc/views/partials/header.php"?>
    <?php
        if(isset($content)) {
            echo $content;
        }
    ?>
    <?php require_once "./mvc/views/partials/footer.php"?>
    
    <?php require_once 'partials/script.php' ?>
</body>
</html>