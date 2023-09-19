<?php
    $pageTitle = "About";
    ob_start();
?>

<h1>About</h1>

<?php
    $content = ob_get_contents();
    require_once('template.php');
?>
