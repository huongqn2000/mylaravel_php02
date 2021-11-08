<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function login(){
        $errors = [];

        if ($_POST)
        {
            if (empty($_POST['txtEmail']))
            {
                $errors['txtEmail'] = 'Email is required!';
            }
            elseif (filter_var($_POST['txtEmail'], FILTER_VALIDATE_EMAIL) == false)
            {
                $errors['txtEmail'] = "Email address '".$_POST['txtEmail']."' is considered invalid.\n";
            }

            if (empty($_POST['txtPass']))
            {
                $errors['txtPass'] = 'Password is required!';
            }

            if ($errors)
            {
                $_SESSION['errors'] = $errors;
                $_SESSION['data'] = $_POST;
                header('location: /login');
                exit();
            }

            $sql = "SELECT `id`, `nickname`, `email` FROM users where `email` = ? AND `password` = ?";

            try {
                $userModel = new User();
                $user = $userModel->query($sql, [$_POST['txtEmail'], sha1($_POST['txtPass'])]);

                if ($user)
                {
                    $_SESSION['user'] = $user;
                    header('location: /home');
                    exit();
                }

            } catch(\PDOException $e) {
                $_SESSION['errors'] = ['loginId' => "Error: " . $e->getMessage()];
                $_SESSION['data'] = $_POST;
                header('location: /login');
                exit();
            }
        }

        $_SESSION['errors'] = ['loginId'=>'Password is wrong or User is not existing!'];
        $_SESSION['data'] = $_POST;
        header('location: /login');
        exit();
    }

    public function logout()
    {
        unset($_SESSION['user']);
        session_destroy();
        header('location: /login');
        exit();
    }
}
