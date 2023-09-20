<?php
    $pageTitle = "Trang chủ";
    ob_start();
    require_once('./mvc/views/template.php');
    ?>
<h1>Home</h1>

<?php
    $content = ob_get_contents();
?>

