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

            if ($alreadyEmail) {
                echo "
                        <script>
                            alert('Email already exists');
                        </script>
                    ";
            } else if ($password !== $rePassword) {
                echo "
                        <script>
                            alert('Password does not match');
                        </script>
                    ";
            } else {
                $createdUser = $this->registerModel->insert('user', $userData);

                if ($createdUser) {
                    $userId = mysqli_insert_id($this->registerModel->conn);
                    $accountData = [
                        'email' => $email,
                        'password' => $password,
                        'create_date' => $date,
                        'status' => 'active',
                        'id_user' => $userId
                    ];
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
