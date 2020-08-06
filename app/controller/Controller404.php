<?php
/**
 * Created by PhpStorm.
 * User: Fall
 * Date: 11/07/2018
 * Time: 17:28
 */

namespace App\controller;

use Src\classes\ClassRender;
use Src\interfaces\InterfaceView;

class Controller404 extends ClassRender implements InterfaceView
{
    public function __construct()
    {
        $this->setTitle("Erro 404!");
        $this->setDescription("Erro 404 - Página não encontrada.");
        $this->setKeyworks("Error 404");
        $this->setDirectory("erro404");

        $this->renderLayout();
    }
}