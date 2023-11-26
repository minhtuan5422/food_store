<?php
session_start();
unset($_SESSION['email']);
setcookie('user_name', '', time() - 3600, '/'); // Đặt thời gian sống của cookie là trước đó 1 giờ
header('Location: http://localhost/food_store/');
exit();
