<?php
$pageTitle = "Login";
ob_start();
?>

<?php require_once "./mvc/views/partials/breadcrumb.php" ?>

<div class="login">
    <div class="container-xl">
        <div class="login__dialog">
            <form action="" method="post">
                <h5>Sign In</h5>
                <input type="text" name="" id="" placeholder="Email">
                <div class="w-100 mt-3 login__dialog--password position-relative">
                    <input type="text" name="" id="" placeholder="Password">
                    <button class="border-0 p-0 bg-white position-absolute">
                        <i class="icon-eye"></i>
                    </button>
                </div>
                <div class="d-flex align-item-center justify-content-between mt-4">
                    <div class="d-flex align-items-center">
                        <input type="checkbox" name="" id="rememberPassword">
                        <label for="rememberPassword">Remember me</label>
                    </div>
                    <a href="#" class="login__dialog--forget">Forget Password</a>
                </div>
                <button type="submit" class="login__dialog--submit">Login</button>
                <p class="login__dialog--link">Don’t have account?<a href="#"> Register</a></p>
            </form>
        </div>
    </div>
</div>

<?php
require_once "./mvc/views/partials/footer-child.php";
$content = ob_get_contents();
ob_end_clean();
require_once('./mvc/views/template.php');
?>