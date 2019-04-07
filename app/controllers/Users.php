<?php

/**
 * Class Users is going to be used to save our user
 * information to the database using mysqli
 */
    class Users extends Controller {

        public function __construct() {
            $this->userModel = $this->model('User');
        }

        public function register(){
            // Check for POST
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                // Process form

                // Sanitize POST data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                // Init data
                $data =[
                    trim($_POST['name']),
                    trim($_POST['email']),
                    trim($_POST['password']),
                    trim($_POST['username']),
                    trim($_POST['age'])
                ];

                $this->view('pages/signinSuccess');

                // Connect to a database
                $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

                $query = "INSERT INTO users(name, email, password, username, age) VALUES($data[0], $data[1], $data[2], $data[3], $data[4])";

                mysqli_query($conn, $query);


            } else {
                // Init data
                $data =[
                    'name' => '',
                    'email' => '',
                    'password' => '',
                    'confirm_password' => '',
                    'name_err' => '',
                    'email_err' => '',
                    'password_err' => '',
                    'confirm_password_err' => ''
                ];

                // Load view
                $this->view('pages/signinSuccess', $data);
            }
        }

        public function login(){
            $_SESSION['user'] = $_POST['username'];
        }
    }