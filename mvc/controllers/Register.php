<?php
class Register extends Controller
{
    private $registerModel;
    function __construct()
    {
        $this->registerModel = $this->model('RegisterModel');
        $this->createAccount();
    }

    public function Show()
    {
        $this->view('RegisterView', []);
    }

    public function createAccount()
    {
        if (isset($_POST['createAccount'])) {
            $email = $_POST['emailRegister'];
            $password = $_POST['passwordRegister'];
            $rePassword = $_POST['rePasswordRegister'];
            $date = date('Y-m-d');
            $userData = [
                'id_type' => 2,
                'email' => $email,
                'phone_number' => ''
            ];

            $sql = "SELECT email FROM user WHERE email = '$email'";
            $alreadyEmail = $this->registerModel->select($sql);

            // Kiểm tra email đã tồn tại hay chưa
            if ($alreadyEmail) {
                echo "
                        <script>
                            alert('Email already exists');
                        </script>
                    ";
            } else if ($password !== $rePassword) {
                // Trường hợp mật khẩu nhập lại không trùng khớp
                echo "
                        <script>
                            alert('Password does not match');
                        </script>
                    ";
            } else {
                //Thêm dữ liệu và bảng user
                $createdUser = $this->registerModel->insert('user', $userData);

                if ($createdUser) {
                    $userId = mysqli_insert_id($this->registerModel->conn);
                    $accountData = [
                        'email' => $email,
                        'password' => $password,
                        'create_date' => $date,
                        'status' => 'active',
                        'id_user' => $userId,
                        'id_role' => '4'
                    ];

                    //Thêm dữ liệu và bảng account
                    $this->registerModel->insert('account', $accountData);
                    echo "
                            <script>
                                alert('Register account successfully');
                                window.location.href = '" . PUBLIC_URL . "login';
                            </script>
                        ";
                }
            }
        }
    }
}
