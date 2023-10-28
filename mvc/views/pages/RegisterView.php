<?php
$pageTitle = "Login";
ob_start();
$currentPage = "Register";
require_once "./mvc/views/partials/breadcrumb.php";
?>

<div class="login">
    <div class="container-xl">
        <div class="login__dialog">
            <form action="" method="post">
                <h5>Create Account</h5>
                <input type="text" name="" id="" placeholder="Email">
                <div class="w-100 mt-3 login__dialog--password position-relative">
                    <input type="password" name="" id="" placeholder="Password">
                    <button class="border-0 p-0 bg-white position-absolute">
                        <i class="icon-eye"></i>
                    </button>
                </div>
                <div class="w-100 mt-3 login__dialog--password position-relative">
                    <input type="password" name="" id="" placeholder="Confirm Password">
                    <button class="border-0 p-0 bg-white position-absolute">
                        <i class="icon-eye"></i>
                    </button>
                </div>
                <div class="d-flex align-items-center mt-4">
                    <input type="checkbox" name="" id="rememberPassword">
                    <label for="rememberPassword">Accept all terms & Conditions</label>
                </div>
                <button type="submit" class="login__dialog--submit">Create Account</button>
                <p class="login__dialog--link">
                    Already have account
                    <a href=<?php echo PUBLIC_URL . "login"?>> Login</a>
                </p>
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