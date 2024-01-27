<?php

namespace Core;


class Authenticator
{

    protected $username;
    protected $userId;


    public function attempt($email, $password)
    {
        $user = App::resolve(Database::class)
            ->query('SELECT * FROM users WHERE email = :email', [
                'email' => $email
            ])->find();
       
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $this->login([
                    'email' => $email,
                    'name' => $this->getUsername($email),
                    'id' => $this->getUserId($email)
                ]);
                return true;
            }
        }
        return false;
    }


    public function getUsername($email)
    {
        $username = App::resolve(Database::class)->query('SELECT username FROM users WHERE email = :email', [
            'email' => $email
        ])->find();
        return $username;
    }

    public function getUserId($email)
    {
        $userid = App::resolve(Database::class)->query('SELECT id FROM users WHERE email = :email', [
            'email' => $email
        ])->find();
        return $userid;
    }

    public function login($user)
    {
        $_SESSION['user'] = [
            'email' => $user['email'],
            'name' => $user['name'],
            'id' => $user['id']

        ];
        session_regenerate_id(true);
    }

    public function logout()
    {
        {
            Session::destroy();
        }
    }
}
