<?php
$breadcrumb = [
    ['name' => 'Home', 'url' => PUBLIC_URL . ''],
    ['name' => 'About', 'url' => PUBLIC_URL . 'about'],
    ['name' => 'Shop', 'url' => PUBLIC_URL . 'product'],
    ['name' => 'Blog', 'url' => PUBLIC_URL . 'article'],
    ['name' => 'Contact', 'url' => PUBLIC_URL . 'contact'],
    ['name' => 'Cart', 'url' => PUBLIC_URL . 'cart'],
    ['name' => 'Checkout', 'url' => PUBLIC_URL . 'checkout'],
    ['name' => 'Login', 'url' => PUBLIC_URL . 'login'],
    ['name' => 'Register', 'url' => PUBLIC_URL . 'register'],
    ['name' => 'Dashboard', 'url' => PUBLIC_URL . 'userdashboard'],
]
?>

<nav class="breadcrumb">
    <div class="container-xl">
        <ol>
            <li>
                <a href=<?php echo PUBLIC_URL . "" ?>>
                    <i class="icon-home me-1"></i>
                </a>
                <i class="icon-chevron-right"></i>
            </li>
            <?php foreach ($breadcrumb as $page) {
                if(isset($currentPage) && $page['name'] == $currentPage) {
                    echo 
                    '<li aria-current="page">
                        <a class="active" href=' . $page['url'] . '>' . $page['name'] . '</a>
                        <i class="icon-chevron-right"></i>
                    </li>';
                }
            } ?>
        </ol>
    </div>
</nav>