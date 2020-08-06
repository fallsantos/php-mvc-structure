<?php

use App\models\Post;

if(!function_exists('thisPage'))
{
    function thisPage(string $param = null)
    {
        $param = $param ? $param : '';
        return $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . $param;
    }
}

if(!function_exists('isAuth'))
{
    function isAuth()
    {
        if(empty($_SESSION['userLogin']))
        {
            $site = DIR_PAGE;
            header("location: {$site}/auth");// Redireciona para a tela de login.
        }
    }
}

if(!function_exists('testes'))
{
    function testes()
    {
        echo "Teste helpers!";
    }
}