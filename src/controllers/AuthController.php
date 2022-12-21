<?php
declare(strict_types=1);


class AuthController
{
    private Auth $authModel;

    public function __construct()
    {
        $this->authModel = new Auth();
    }

    public function register(array $input): void
    {
        // var_dump( $input['nickname']);
        // die();
        if (empty($input['firstname']) ||empty($input['lastname']) || empty($input['nickname']) || empty($input['email']) || empty($input['password'])) {
            throw new Exception('Form data not validated.');
        }

        $firstname= htmlspecialchars($input['firstname']);
        $lastname = htmlspecialchars($input['lastname']);
        $username = htmlspecialchars($input['nickname']);
        $email = filter_var($input['email'], FILTER_SANITIZE_EMAIL);
        $password = password_hash($input['password'], PASSWORD_DEFAULT);

        $this->authModel->create( $firstname,$lastname,$username, $email, $password);

        $id = $this->authModel->getLastInsertId();

        $_SESSION['User'] = [
            'ID' => $id,
            'firstname' => $username,
            'lastname' => $username,
            'nickname' => $username,
            'email' => $email
        ];

        http_response_code(302);
        header('location: /');
    }

    public function showRegistrationForm(): void
    {
        include 'views/includes/header.view.php';
        include 'views/registration.view.php';
        include 'views/includes/footer.view.php';
    }

    public function login(array $input)
    {
        if (empty($input) || empty($input['nickname']) || empty($input['password'])) {
            throw new Exception('Form data not validated.');
        }

        // Sanitize/validate input
        $username = htmlspecialchars($input['nickname']);
        $password = htmlspecialchars($input['password']);

        $user = $this->authModel->find($username);

        if (!password_verify($password, $user['password'])) {
            throw new Exception("Failed login attempt : wrong password");
        }

        $_SESSION['user'] = [
            "ID" => $user["ID"],
            'firstname' => $user['lastname'],
            'lastname' => $user['firstname'],
            'nickname' => $user['nickname'],
            'email' => $user['email']
        ];

        // Then, we redirect to the home page
        http_response_code(302);
        header('location: /');
    }

    public function showLoginForm()
    {
        include 'views/includes/header.view.php';
        include 'views/login.view.php';
        include 'views/includes/footer.view.php';
    }

    public function logout()
    {
        unset($_SESSION['User']);

        header('location: /');
    }
}