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
            $sqlAdmin = "SELECT * FROM account as a, user as u WHERE a.email = '$email' AND a.password = '$password' AND a.id_user = u.id_user AND u.id_type = '1' ";
            $sqlCustomer = "SELECT * FROM account as a, user as u WHERE a.email = '$email' AND a.password = '$password' AND a.id_user = u.id_user AND u.id_type = '2' ";
            $resultAdmin = $this->loginModel->select($sqlAdmin);
            $resultCustomer = $this->loginModel->select($sqlCustomer);

            if ($resultAdmin) {
                // Nhân viên đăng nhập thành công
                $_SESSION['email'] = $email;
                $userId = $resultAdmin[0]['id_user'];
                $_SESSION['user_id'] = $userId;
                $response = array('status' => 'nvsuccess', 'message' => 'Nhân viên đăng nhập thành công');
                setcookie('id_role', $resultAdmin[0]['id_role'], time() + (86400 * 30), '/');
                setcookie('email', $email, time() + (86400 * 30), '/');
                exit();
            } else {
                // Ghi log ra file
                $error_message = 'Failed to log in as admin. Email: ' . $email . ', Password: ' . $password;
                error_log($error_message, 0);
            }

            if ($resultCustomer) {
                // Khách hàng đăng nhập thành công
                $_SESSION['email'] = $email;
                $userId = $resultCustomer[0]['id_user'];
                $_SESSION['user_id'] = $userId;
                $response = array('status' => 'khsuccess', 'message' => 'Khách hàng đăng nhập thành công');
                setcookie('id_role', $resultCustomer[0]['id_role'], time() + (86400 * 30), '/');
                setcookie('email', $email, time() + (86400 * 30), '/');
                exit();
            } else {
                // Ghi log ra file
                $error_message = 'Failed to log in as customer. Email: ' . $email . ', Password: ' . $password;
                error_log($error_message, 0);

                // Sai thông tin đăng nhập
                $response = array('status' => 'error', 'message' => 'Email hoặc mật khẩu không chính xác!');

                // Trả về phản hồi JSON
                header('Content-Type: application/json');
                echo json_encode($response);
            }

            if (!$resultAdmin && !$resultCustomer) {
                // Ghi log ra file
                $error_message = 'Failed to log in. Email: ' . $email . ', Password: ' . $password;
                error_log($error_message, 0);

                // Sai thông tin đăng nhập
                $response = array('status' => 'error', 'message' => 'Email hoặc mật khẩu không chính xác!');

                // Trả về phản hồi JSON
                header('Content-Type: application/json');
                echo json_encode($response);
            }
        }
    }
}
