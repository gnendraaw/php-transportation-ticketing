<?php

class Middleware {
    public static function onlyAdmin()
    {
        if (!isset($_SESSION['user']))
        {
            header('location: ' . BASE_URL . '/login');
            exit;
        }
        if ($_SESSION['user']['level']=='petugas')
        {
            header('location: ' . BASE_URL . '/petugas');
            exit;
        }
    }

    public static function onlyNotLoggedIn()
    {
        if (isset($_SESSION['user']))
        {
            if ($_SESSION['user']['level']=='petugas')
            {
                header('location: ' . BASE_URL . '/petugas');
                exit;
            }
            if ($_SESSION['user']['level']=='admin')
            {
                header('location: ' . BASE_URL . '/admin');
                exit;
            }
            header('location: ' . BASE_URL);
            exit;
        }
    }

    public static function onlyLoggedIn()
    {
        if (!isset($_SESSION['user']))
        {
            header('location: ' . BASE_URL);
            exit;
        }
    }

    public function directTo($path)
    {
        header('location: ' . BASE_URL . $path);
        exit;
    }
}