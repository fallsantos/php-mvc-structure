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

class ControllerError extends ClassRender implements InterfaceView
{
    public function __construct()
    {
        $data = [
            "error" => 404
        ];
        
        $this->setTitle("Erro {$data['error']}!");
        $this->setDescription("Erro {$data['error']}.");
        $this->setKeyworks("Error {$data['error']}");
        $this->setDirectory("error");
        
        
        $this->renderLayout('error', $data);
    }
}