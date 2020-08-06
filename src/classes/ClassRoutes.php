<?php
/**
 * User: Fall
 * Date: 11/07/2018
 * Time: 13:18
 *
 * Pega a url digitada pelo usuário, verifica se existe a rota,
 * caso exista a rota ela retorna o controller referente.
 */

namespace Src\classes;

use Src\traits\TraitUrlParser;
use Src\traits\TraitRoutes;

class ClassRoutes
{
    use TraitUrlParser;// << A que divide a url em um array.
    use TraitRoutes;// << Onde são definidas todas as rotas do sistema.

    private $rota;

    # Método de retorno da rota
    public function getRoute()
    {
        $url = $this->parseUrl();// <- Recebe url da TraitUrlParcer, que está em formato de array

        $indice = $url[0]; // O índice, que vai receber a url na posição [0](o primeiro índice do array). ex localhost/home, ele peg o home***

        // ↓↓↓ O usuário só terá acesso as rotas que forem pre determinadas aquí.
        $this->rota = $this->definedRoures();

        //     ↑↑↑ <<<<<<<<<<< ↓↓↓
        if(array_key_exists($indice,$this->rota))// Se existir o índice na rota(que está em formato de array), se o que o usuário digitou existe.
        {
            if(file_exists(SITE['root'] . "/App/controller/" . str_replace("\\", "/", $this->rota[$indice]) . ".php"))
            {// Se existir o que ele digitou(o aqquivo)
                return $this->rota[$indice];//(do definedRoutes() ↑↑↑ Ex:   se ele digitou "Home" ele vai retornar o "ControllerHome"
            }
            else// Se existe o que o usuário digitou, porém o arquivo não exista(o desenvolvedor apagou sem querer ou esqueceu de colocar).
            {
                //return "site\ControllerHome";
                die('deu merda');
            }
        }
        else// Se não exirtir / digitou besteira
        {
            return "Controller404"; // Retorna o Controller404 Erro 404 - Page not found!.
        }
    }
}