<?php
class Login extends Controller
{
    private $loginModel;

    function __construct()
    {
        $this->loginModel = $this->model("LoginModel");
        $this->handleLogin();
    }

    public function Show()
    {
        $this->view('LoginView', []);
    }

    public function handleLogin()
    {
        if (isset($_POST['email']) && isset($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            /* Kiểm tra admin đăng nhập */
            $sqlAdmin = "SELECT * FROM account as a, user as u 
            WHERE a.email = '$email' AND a.password = '$password' AND a.id_user = u.id_user AND u.id_type = '1' ";
            /* Kiểm tra admin khách hàng */
            $sqlCustomer = "SELECT * FROM account as a, user as u 
            WHERE a.email = '$email' AND a.password = '$password' AND a.id_user = u.id_user AND u.id_type = '2' ";
            $resultAdmin = $this->loginModel->select($sqlAdmin);
            $resultCustomer = $this->loginModel->select($sqlCustomer);

            if ($resultAdmin) {
                /* Nhân viên đăng nhập thành công 
                Tạo phiên đăng nhập và lưu trữ thông tin tạm thời với session và cookie */
                $_SESSION['email'] = $email;
                $userId = $resultAdmin[0]['id_user'];
                $_SESSION['user_id'] = $userId;
                setcookie('id_role', $resultAdmin[0]['id_role'], time() + (86400 * 30), '/');
                setcookie('email', $email, time() + (86400 * 30), '/');
                echo "
                    <script>
                    alert('Admin logged in successfully'); 
                    window.location.href='" . PUBLIC_URL . "admin';
                    </script>
                ";
                exit();
            } elseif ($resultCustomer) {
                // Khách hàng đăng nhập thành công
                $_SESSION['email'] = $email;
                $userId = $resultCustomer[0]['id_user'];
                $_SESSION['user_id'] = $userId;
                setcookie('id_role', $resultCustomer[0]['id_role'], time() + (86400 * 30), '/');
                setcookie('email', $email, time() + (86400 * 30), '/');
                echo "
                    <script>
                    alert('Customer logged in successfully'); 
                    window.location.href='" . PUBLIC_URL . "';
                    </script>
                ";
                exit();
            } else {
                // Sai thông tin đăng nhập
                echo "
                    <script>
                    alert('Email or password is incorrect'); 
                    window.location.href='" . PUBLIC_URL . "login';
                    </script>
                ";
            }
        }
    }
}
