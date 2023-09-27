<?php
    $pageTitle = "Trang chủ";
    ob_start();
?>

<h1>Home</h1>

<?php
    $content = ob_get_contents();
    ob_end_clean(); 
    require_once('./mvc/views/template.php');
?>