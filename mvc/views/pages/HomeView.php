<?php
    $pageTitle = "Trang chủ";
    ob_start();
?>

<h1>Home</h1>

<?php
    $content = ob_get_contents();
    require_once('template.php');
?>
